<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CCD - Exercício 1</title>

        <link rel="stylesheet" href="assets/game-style.css">
        <link rel="stylesheet" href="assets/game-ex1-style.css">
        
        <?php
            include("fix/links.php");
        ?>

        <script src="assets/typeWrite.js" defer></script>

    </head>
    <body>
        <?php
            include("fix/header.php");
        ?>
        <nav class="menu">
            <a href="materials.php">MATERIAL</a>
            <a href="quest.php">JOGAR</a>
            <a href="default.php">TESTE</a>
            <a href="index.php">MODIFICAÇÕES</a>
            <a href="temp.php">RESULTADOS</a>
        </nav>
        <div class="fill"></div>
        
        <main class="main">
            <section class="teacher-dialogue">
                <img src="images\teacher.png" alt="teacher">
                <div class="teacher-dialog-text">
                    <span class="typeWrite">
                        <?php
                            include("fix/teacher-dialogues/ex1-1-dialogue.php");
                        ?>
                    </span>
                </div>
                <div class="ex-quest">
                    <div>
                        <span>1.</span>
                        <div><img src="images/ezgif-4-31cddcc789.gif" alt="quest1"></div>
                    </div>
                </div>
            </section>
            
            <section class="container-alternative">
                <div class="content">
                    <img src="images\circAND.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>E</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionANDplusNOT.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>E</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionANDplusNOT.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>E</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionANDplusNOT.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>E</u></span></div>
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