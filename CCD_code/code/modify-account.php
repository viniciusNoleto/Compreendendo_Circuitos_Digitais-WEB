
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
            SET `name` = ?, email = ?, born = ?, `password` = ?, `avatar` = ?
            WHERE id = ?";

            $stmt_update = $db->prepare($sql_modify);

            $input_params = [
                $post_data["name"],
                $post_data["email"],
                $post_data["born"],
                $post_data["password"],
                $post_data["avatar"],
                $post_data["id"]
            ];

            $stmt_update->bind_param("sssssi",...$input_params);
            
            $stmt_update->execute();


            $sql_search = "SELECT `id`, `name`, `password`, `avatar`, `teacher` FROM student WHERE `id` = ?";
                        
            $stmt_search = $db->prepare($sql_search);
            $stmt_search->bind_param("s",$_SESSION['profile']['id']);
            $stmt_search->execute();

            $result = $stmt_search->get_result()->fetch_assoc();
            if($result !== NULL){
                $_SESSION['profile'] = $result;
            };
        };
    ?>

    <section>

        <form action="" method="post">
            
            <input type="hidden" name="id" value="<?php if(count($post_data) > 0){echo $_SESSION['profile']['id'];} ?>">
            
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

            <div class="c6"> Avatar: </div>

            <section class="c6 choose-avatar">
                <div><img src="/images/avatar (1).png" alt=""><input type="radio" name="avatar" id="avatar" value="1" checked></div>
                <div><img src="/images/avatar (2).png" alt=""><input type="radio" name="avatar" id="avatar" value="2"></div>
                <div><img src="/images/avatar (3).png" alt=""><input type="radio" name="avatar" id="avatar" value="3"></div>
                <div><img src="/images/avatar (4).png" alt=""><input type="radio" name="avatar" id="avatar" value="4"></div>
                <div><img src="/images/avatar (5).png" alt=""><input type="radio" name="avatar" id="avatar" value="5"></div>
                <div><img src="/images/avatar (6).png" alt=""><input type="radio" name="avatar" id="avatar" value="6"></div>
            </section>
            
            <div class="for-button c6">
                <button>Confirmar</button>
            </div>
        </form>
    </section>
</main>