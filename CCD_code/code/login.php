        <main class="main">
            <section class="avatar-container">
                <?php
                    $errors = [];

                    if(isset($_POST['name'])){
                        if(trim($_POST['name'])===""){
                            $errors[] = "deu ruim";
                        };
                    }else{
                        $errors[] = "deu ruim";
                    };

                    if(isset($_POST['password'])){
                        if(trim($_POST['password'])===""){
                            $errors[] = "deu ruim";
                        };
                    }else{
                        $errors[] = "deu ruim";
                    };

                    if(count($errors)==0){
                        $sql_search = "SELECT `id`, `name`, `password`, `avatar`, `teacher` FROM student WHERE `name`=? AND `password`=?";
                        
                        $stmt_search = $db->prepare($sql_search);
                        $stmt_search->bind_param("ss",$_POST['name'],$_POST['password']);
                        $stmt_search->execute();

                        $result = $stmt_search->get_result()->fetch_assoc();
                        if($result !== NULL){
                            $_SESSION['profile'] = $result;
                        };
                    };

                ?>
                <div>
                    <img src="../images/avatar (<?php 
                                                if(isset($_SESSION['profile'])){
                                                    echo($_SESSION['profile']['avatar']);
                                                }else{
                                                    echo "0";
                                                };
                                            ?>).png" alt="avatar">
                </div>
                <div>
                    <h2>
                        <?php
                            if(isset($_SESSION['profile'])){
                                echo($_SESSION['profile']['name']);
                            }
                        ?>
                    </h2>
                </div>
            </section>
            <section>
                <form action="#" method="post">
                    <div class="c" style="grid-area:1/2/span 1/span 4">
                        <label for="name">Login:</label>
                        <input type="text" name="name" placeholder="Login">
                    </div>
                        <br>
                    <div class="c" style="grid-area:2/2/span 1/span 4">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" placeholder="Senha">
                    </div>
                    
                    <div class="for-button c6">
                        <button>Confirmar</button>
                    </div>
                </form>
                <div class="alert">
                    <alert style="font-size: 20px; font-weight: 600;">
                            <?php
                                if(count($errors)==0){
                                    if($result === NULL){
                                        echo "Login inválido";
                                    };
                                };
                            ?>
                    </alert>
                </div>
            </section>
            <section class="new-account">
                <a href="base?file=account&_file=sign-in">Ainda não possui uma conta?</a>
            </section>

        </main>
