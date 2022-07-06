<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CCD - Exercício 1 Nível 2</title>

        <link rel="stylesheet" href="assets/game-style.css">
        <link rel="stylesheet" href="assets/game-ex2-style.css">
        <link rel="stylesheet" href="assets/dragNDrop.css">
        
        <?php
            include("fix/links.php");
        ?>

        <script src="assets/typeWrite.js" defer></script>
        <script src="assets/dragNDrop.js" defer></script>

    </head>
    <body>
        <?php
            include("fix/header.php");
        ?>
        <nav class="menu">
            <a href="materials.php">MATERIAL</a>
            <a href="index.php">HOME</a>
            <a href="quest.php">JOGAR</a>
        </nav>
        <div class="fill"></div>
        
        <main class="main">
            <section class="teacher-dialogue">
                <img src="images\teacher.png" alt="teacher">
                <div class="teacher-dialog-text">
                    <span class="typeWrite">
                        <?php
                            include("fix/teacher-dialogues/ex2-1-dialogue.php");
                        ?>
                    </span>
                </div>
                <div class="ex-quest">
                    <div>
                        <span>13.</span>
                        <div><img src="images/tabelaVerAND.png" alt="quest1"></div>
                        <div class="img-base"><img src="images/ex2-base.gif" alt="quest1"></div>
                        <div class="drop-target"></div>
                    </div>
                </div>
            </section>
            
            <section class="container-alternative-drag">
                <div class="drop-target"><div draggable="true"><img src="images/functionAND.png" alt=""></div></div>
                <div class="drop-target"><div draggable="true"><img src="images/functionOR.png" alt=""></div></div>
                <div class="drop-target"><div draggable="true"><img src="images/functionNOT.png" alt=""></div></div>
                <div class="drop-target"><div draggable="true"><img src="images/functionXOR.png" alt=""></div></div>
            </section>

            <section class="next-ex">
                <div class="game-button"> Tem certeza? Então vamos para a
                    <a
                        href=<?php
                                include("fix/calc/next-ex-calc-2.php");
                            ?>
                    >próxima fase</a>
                </div>
            </section>
        </main>

        <?php
            include("fix/footer/standard-footer.php");
        ?>

        <script>

        </script>
    </body>
</html>
