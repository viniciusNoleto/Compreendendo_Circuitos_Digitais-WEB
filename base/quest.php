
    <head>
        <meta charset="UTF-8">
        <title>CCD - Quest</title>

        <link rel="stylesheet" type="text/css" href="../assets/game-style.css">
        <link rel="stylesheet" href="../assets/game-quest-style.css">
        <?php
            include("fix/links.php");
        ?>

        <script src="../assets/typeWrite.js" defer></script>
        <script src="../assets/wireCanvasQuest.js" defer></script>
        
    </head>
    <body>
        <?php
            include("fix/header.php");
        ?>
        <nav class="menu">
            <a href="base?file=materials">MATERIAL</a>
            <a href="../index.php">HOME</a>
            <a href="base?file=temp">MODIFICAÇÕES</a>
        </nav>
        <div class="fill"></div>

        <main class="main">
            <section class="teacher-dialogue">
                <img src="..\images\teacher.png" alt="teacher">
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
                    <img src="../images\circAND.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al1"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="../images\functionANDplusNOT.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al2"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al2"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="../images\functionAND.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al3"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al3"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="../images\circOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al4"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al4"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="../images\functionNOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al5"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al5"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="../images\functionXNOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al6"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al6"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="../images\functionXOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al7"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al7"><span>Função <u>OU</u></span></div>
                </div>

                <div class="content">
                    <img src="../images\circXOR.png" alt="logozinDeCria">
                    <div class="alternative"><input type="radio" name="al8"><span>Função <u>E</u></span></div>
                    <div class="alternative"><input type="radio" name="al8"><span>Função <u>OU</u></span></div>
                </div>
            </section>

            <section class="teacher-dialogue">
                <img src="../images\teacher.png" alt="teacher">
                <div class="teacher-dialog-text">
                    <span class="typeWrite">
                        Bom, para entendermos o conceito básico de chaves e circuitos ao lado podemos ver um circuito que liga uma lâmpada, onde uma chave abre e fecha para interromper o funcionamento do circuito, apagando a lâmpada, ou seja, para entendermos o funcionamento basta entender as chaves como interruptores como aqueles que temos em nossas casas.
                    </span>
                </div>
                <div class="ex-quest">
                    <button class="game-button" id="wire-button" onclick="wireChange()">Fechar</button>
                    <div>
                        <canvas id="wireCanvas" width="245" height="180"></canvas>
                        <div class="switch-line" id="switch-line-open"></div>
                        <div class="light" id="light1"></div>
                        <div class="bulb" id="wire-empty"></div>
                    </div>
                </div>
            </section>

            <section class="next-ex">
                <div class="game-button"> Tudo certo então? Vamos
                    <a class="botton-line-important"
                        href=<?php
                                $seed = "base?file=lvl1&_file=";
                                $exAddress = rand(1,5);
                                if ($exAddress == 1) {
                                    echo($seed."exe1-1");
                                } elseif ($exAddress == 2) {
                                    echo($seed."exe1-2");
                                } elseif ($exAddress == 3) {
                                    echo($seed."exe1-3");
                                } elseif ($exAddress == 4) {
                                    echo($seed."exe1-4");
                                } elseif ($exAddress == 5) {
                                    echo($seed."exe1-5");
                                };
                            ?>
                    >começar!</a>
                </div>
            </section>
        </main>

        <?php
            include("fix/footer/game-footer.php");
        ?>
    </body>