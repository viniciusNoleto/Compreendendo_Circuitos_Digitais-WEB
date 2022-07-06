
<main class="main">
    <?php
        $post_data = $_POST; $errors = []; 

        if(count($post_data) > 0){
            if(trim($post_data['name']) === ""){
                $errors[] = "O campo nome é obrigatorio";
            };
    
            if(!filter_var($post_data['email'], FILTER_VALIDATE_EMAIL)){
                $errors[] = "O campo email é obrigatorio e deve estar na formatação correta";
            };
    
            if(isset($post_data['born'])){
                $dtF = DateTime::createFromFormat('Y-m-d', $post_data['born']);
                $dtV = explode("-",$post_data['born']);
                $live_date = explode("/",date("Y/m/d"));
                if(!$dtF || $dtV[0]<($live_date[0]-120) || $dtV[0]>$live_date[0]
                || ($dtV[0]==$live_date[0] && $dtV[1]>$live_date[1]) || ($dtV[0]==$live_date[0] 
                && $dtV[1]==$live_date[1] && $dtV[2]>=$live_date[2])){
                    $errors[] = "O campo data deve estar na formatação correta";
                };
            };
        };
        
        if(!count($errors) && count($post_data) > 0){

            $sql_modify = 
            "UPDATE student
            SET `name` = ?, email = ?, born = ?, `password` = ?
            WHERE id = ?";

            $stmt_update = $db->prepare($sql_modify);

            $input_params = [
                $post_data["name"],
                $post_data["email"],
                $post_data["born"],
                $post_data["password"],
                $post_data["id"]
            ];

            $stmt_update->bind_param("ssssi",...$input_params);
            
            $stmt_update->execute();
        }

        if(isset($_GET['cod'])){
            $sql_get = "SELECT * FROM student WHERE id = ?";

            $stmt_get = $db->prepare($sql_get);
            $stmt_get->bind_param("i", $_GET['cod']);

            if($stmt_get->execute()){
                $get_result = $stmt_get->get_result();
                if($get_result->num_rows > 0){
                    $post_data = $get_result->fetch_assoc();
                };
            };
        };
    ?>

    <section>

        <form action="/account.php" method="get">
            <input type="hidden" name="dir" value="code">
            <input type="hidden" name="file" value="modify-login">
            <div class="c c6">
                <button>Buscar</button>
                <input type="number" name="cod" placeholder="Fala o código aí paizão"
                    value="<?php if(isset($_GET['cod'])){echo $_GET['cod'];} ?>">
            </div>
        </form>

        <form action="#" method="post">
            
            <input type="hidden" name="id" value="<?php if(count($post_data) > 0){echo $post_data['id'];} ?>">
            
            <div class="c c4">
                <label for="name">Novo Nome:</label>
                <input type="text" name="name" id="name" placeholder="Nome"
                    value="<?php if(count($post_data) > 0){echo $post_data['name'];} ?>">
                <alert><?php validate_one_input($post_data, 'name') ?></alert>
            </div>

            <div class="c c2">
                <label for="born">Nova Data de Nascimento:</label>
                <input type="date" name="born" id="born" placeholder="Nascimento"
                    value="<?php if(count($post_data) > 0){echo $post_data['born'];} ?>">
                <alert><?php validate_one_input($post_data, 'born') ?></alert>
            </div>

            <div class="c c3">
                <label for="Password">Nova Senha:</label>
                <input type="password" name="password" id="password" placeholder="Senha"
                    value="<?php if(count($post_data) > 0){echo $post_data['password'];} ?>">
                <alert><?php validate_one_input($post_data, 'password') ?></alert>
            </div>

            <div class="c c3">
                <label for="Email">Novo Email:</label>
                <input type="email" name="email" id="email" placeholder="Email"
                    value="<?php if(count($post_data) > 0){echo $post_data['email'];} ?>">
                <alert><?php validate_one_input($post_data, 'email') ?></alert>
            </div>
            
            <div class="for-button c6">
                <button>Confirmar</button>
            </div>
        </form>
    </section>

    <section>
        <?php
            $sql_table = "SELECT name,email,born FROM student";

            $result = $db->query($sql_table);

            $registers = [];

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $registers[] = $row;
                }
            }
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($registers as $register):?>
                    <tr>
                        <td><?= $register['name']?></td>
                        <td><?= $register['email']?></td>
                        <td>
                            <?php 
                                $actual_date = explode("/",date("Y/m/d"));
                                $born_date = explode("-",$register['born']);
                                $old = $actual_date[0] - $born_date[0] - 1;
                                if(($actual_date[1]>$born_date[1]) || ($actual_date[1]==$born_date[1] && $actual_date[2]>=$born_date[2])){
                                    $old = $old + 1;
                                }; 

                                echo($old);
                            ?>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>      
    </section>
</main>