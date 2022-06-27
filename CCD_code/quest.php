<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CCD - Quest</title>

        <link rel="stylesheet" type="text/css" href="assets/game-style.css">
        <link rel="stylesheet" href="assets/game-quest-style.css">
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
            <a href="index.php">HOME</a>
            <a href="temp.php">MODIFICAÇÕES</a>
        </nav>
        <div class="fill"></div>

        <main class="main">
            <section class="teacher-dialogue">
                <img src="images\teacher.png" alt="teacher">
                <div class="teacher-dialog-text">
                    <span class="typeWrite">
                        <?php
                            include("fix/teacher-dialogues/all-quest.php");
                        ?>
                    </span>
                </div>
            </section>

            <section class="container-alternative">
                <div class="content">
                    <img src="images\circAND.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionANDplusNOT.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al2"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al2"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionAND.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al3"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al3"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="images\circOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al4"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al4"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionNOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al5"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al5"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionXNOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al6"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al6"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="images\functionXOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al7"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al7"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="images\circXOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al8"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al8"><span>Função <u>OU</u></span></div>
                </div>
            </section>

            <section class="next-ex">
                <div> Tudo certo então? Vamos
                    <a
                        href=<?php
                            $exAddress = rand(1,5);
                            if ($exAddress == 1) {
                                echo("exe1-1.php");
                            } elseif ($exAddress == 2) {
                                echo("exe1-2.php");
                            } elseif ($exAddress == 3) {
                                echo("exe1-3.php");
                            } elseif ($exAddress == 4) {
                                echo("exe1-4.php");
                            } elseif ($exAddress == 5) {
                                echo("exe1-5.php");
                            }
                        ?>
                    >começar!</a>
                </div>
            </section>
        </main>

        <?php
            include("fix/footer/game-footer.php");
        ?>
    </body>
</html>