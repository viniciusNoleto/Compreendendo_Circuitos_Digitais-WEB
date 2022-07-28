
<head>
    <meta charset="UTF-8">
    <title>CCD - Results</title>
    <?php
        require_once "db-conect.php"; $db = connect_db(); 
        include("fix/links.php");
    ?>
    <link rel="stylesheet" href="../assets/results-style.css">
    
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

            $sql_consult_evaluation = "SELECT lvl0_evaluation,lvl1_evaluation,lvl2_evaluation,lvl3_evaluation FROM student WHERE `id`=?";
                                    
            $stmt_consult_evaluation = $db->prepare($sql_consult_evaluation);
            $stmt_consult_evaluation->bind_param("s",$_SESSION['profile']['id']);
            $stmt_consult_evaluation->execute();
            $result_evaluation = $stmt_consult_evaluation->get_result()->fetch_assoc();

        ?>

        <main class="main">
            <section class="main-section">
                <section>
                    <img style="height: 250px;" src="../images/avatar (<?= $_SESSION['profile']['avatar'] ?>).png" alt="Avatar">
                </section>

                <section>
                    <div class="graphic">
                        
                        <div></div>
                        <div class="block-graphic" style="height:<?= $result_evaluation['lvl0_evaluation']*10 ?>%;"><?= $result_evaluation['lvl0_evaluation']*10 ?>%</div>
                        
                        <div></div>
                        <div class="block-graphic" style="height:<?= $result_evaluation['lvl1_evaluation']*10 ?>%;"><?= $result_evaluation['lvl1_evaluation']*10 ?>%</div>
                        
                        <div></div>
                        <div class="block-graphic" style="height:<?= $result_evaluation['lvl2_evaluation']*10 ?>%;"><?= $result_evaluation['lvl2_evaluation']*10 ?>%</div>
                        
                        <div></div>
                        <div class="block-graphic" style="height:<?= $result_evaluation['lvl3_evaluation']*10 ?>%;"><?= $result_evaluation['lvl3_evaluation']*10 ?>%</div>

                    </div>
                    <div class="graphic-footer">
                        <div></div>
                        <div>Questionário</div>
                        <div></div>
                        <div>Level 1</div>
                        <div></div>
                        <div>Level 2</div>
                        <div></div>
                        <div>Level 3</div>
                        <div></div>
                    </div>
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