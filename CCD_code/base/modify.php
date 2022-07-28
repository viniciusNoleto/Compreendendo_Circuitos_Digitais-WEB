
<head>
    <meta charset="UTF-8">
    <title>CCD - Modify</title>
    <?php
        require_once "db-conect.php"; $db = connect_db(); 
        include("fix/links.php");
    ?>

    <link rel="stylesheet" href="/assets/modify-style.css">
    
    <script src="../assets/results.js" defer></script>
</head>

<body>
    <?php
        include("fix/header.php");
    ?>
    <nav class="menu">
        <a href="../index.php">HOME</a>
    </nav>
    <div class="fill"></div>

    <?php if(isset($_SESSION['profile'])): ?>
        
        <?php

            $sql_consult_player = "SELECT * FROM student WHERE `id`=?";
                                                
            $stmt_consult_player = $db->prepare($sql_consult_player);
            $stmt_consult_player->bind_param("s",$_SESSION['profile']['id']);
            $stmt_consult_player->execute();
            $result_player = $stmt_consult_player->get_result()->fetch_assoc();

            if(isset($_POST['buy_teacher'])){
                if($result_player['coins'] >= $_POST['cost'] && !$result_player["own_".$_POST['buy_teacher']]){
                    $sql_update_coins = "";

                    if($_POST['buy_teacher'] == "Marcelle"){$sql_update_coins = "UPDATE `student` SET own_Marcelle=1, coins=? WHERE `id`=?";}
                    if($_POST['buy_teacher'] == "Henklain"){$sql_update_coins = "UPDATE `student` SET own_Henklain=1, coins=? WHERE `id`=?";}
                    if($_POST['buy_teacher'] == "MD_Chefe"){$sql_update_coins = "UPDATE `student` SET own_MD_Chefe=1, coins=? WHERE `id`=?";}
                    
                    $actual_coins = intval($result_player['coins'])-intval($_POST['cost']);

                    $stmt_update_coins = $db->prepare($sql_update_coins);
                    $stmt_update_coins->bind_param("ss",$actual_coins,$result_player['id']);
                    $stmt_update_coins->execute();
                };
            };

            if(isset($_POST['change_teacher'])){
                $sql_update_teacher = "";
                if($_POST['change_teacher'] == "Thais"){$sql_update_teacher = "UPDATE `student` SET `teacher`='Thais' WHERE `id`=?";}
                if($_POST['change_teacher'] == "Marcelle"){$sql_update_teacher = "UPDATE `student` SET `teacher`='Marcelle' WHERE `id`=?";}
                if($_POST['change_teacher'] == "Henklain"){$sql_update_teacher = "UPDATE `student` SET `teacher`='Henklain' WHERE `id`=?";}
                if($_POST['change_teacher'] == "MD_Chefe"){$sql_update_teacher = "UPDATE `student` SET `teacher`='MD_Chefe' WHERE `id`=?";}
                
                $stmt_update_teacher = $db->prepare($sql_update_teacher);
                $stmt_update_teacher->bind_param("s",$result_player['id']);
                $stmt_update_teacher->execute();

                $_SESSION['profile']['teacher'] = $_POST['change_teacher'];
            };

            $stmt_consult_player->execute();
            $result_player = $stmt_consult_player->get_result()->fetch_assoc();

        ?>

        <main class="main">
            <section>

                <section class="coins-section">
    
                    <img style="height: 250px;" src="../images/avatar (<?= $_SESSION['profile']['avatar'] ?>).png" alt="Avatar">
                    <div>Moedas: <span><?= $result_player['coins'] ?></span></div>
                
                </section>
    
                <section class="store-section">
    
                    <form action="" method="post">
                        <img src="/images/avatar (4).png" alt="">
                        <label for="change_teacher">Thais:</label>
                        <input type="hidden" name="change_teacher" value="Thais">
                        <button><?php echo $result_player['teacher'] == "Thais" ? "Em uso":"Usar" ?></button>
                    </form>
                    
                    <?php if($result_player['own_Marcelle'] == 1): ?>
                        <form action="" method="post">
                            <img src="/images/avatar (6).png" alt="">
                            <label for="change_teacher">Marcelle:</label>
                            <input type="hidden" name="change_teacher" value="Marcelle">
                            <button><?php echo $result_player['teacher'] == "Marcelle" ? "Em uso":"Usar" ?></button>
                        </form>
                    <?php else: ?>
                        <form action="" method="post">
                            <img src="/images/avatar (6).png" alt="">
                            <label for="buy_teacher">Marcelle:</label>
                            <input type="number" readonly name="cost" value="100">
                            <input type="hidden" name="buy_teacher" value="Marcelle">
                            <button>Comprar</button>
                        </form>
                    <?php endif; ?>
    
                    <?php if($result_player['own_Henklain'] == 1): ?>
                        <form action="" method="post">
                            <img src="/images/avatar (5).png" alt="">
                            <label for="change_teacher">Henklain:</label>
                            <input type="hidden" name="change_teacher" value="Henklain">
                            <button><?php echo $result_player['teacher'] == "Henklain" ? "Em uso":"Usar" ?></button>
                        </form>
                    <?php else: ?>
                        <form action="" method="post">
                            <img src="/images/avatar (5).png" alt="">
                            <label for="buy_teacher">Henklain:</label>
                            <input type="number" readonly name="cost" value="250">
                            <input type="hidden" name="buy_teacher" value="Henklain">
                            <button>Comprar</button>
                        </form>
                    <?php endif; ?>
    
                    <?php if($result_player['own_MD_Chefe'] == 1): ?>
                        <form action="" method="post">
                            <img src="/images/avatar (7).png" alt="">
                            <label for="change_teacher">MD Chefe:</label>
                            <input type="hidden" name="change_teacher" value="MD_Chefe">
                            <button><?php echo $result_player['teacher'] == "MD_Chefe" ? "Em uso":"Usar" ?></button>
                        </form>
                    <?php else: ?>
                        <form action="" method="post">
                            <img src="/images/avatar (7).png" alt="">
                            <label for="buy_teacher">MD Chefe:</label>
                            <input type="number" readonly name="cost" value="600">
                            <input type="hidden" name="buy_teacher" value="MD_Chefe">
                            <button>Comprar</button>
                        </form>
                    <?php endif; ?>
    
                </section>
            </section>
        </main>
    <?php else: ?>
        <main class="main">
            <section>
                Oh não, ainda não possui conta? <a href="base?file=account&_file=sign-in">Então crie uma agora!</a>
            </section>
        </main>
    <?php endif; ?>

    <?php
        include("fix/footer/standard-footer.php");
    ?>
</body>