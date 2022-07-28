
    <head>
        <meta charset="UTF-8">
        <title>CCD - Quest</title>

        <link rel="stylesheet" type="text/css" href="../assets/game-style.css">
        <link rel="stylesheet" href="../assets/game-quest-style.css">
        <?php
            require_once "db-conect.php"; $db = connect_db(); 
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
            <a href="base?file=modify">MODIFICAÇÕES</a>
        </nav>
        <div class="fill"></div>

        <main class="main">
            <?php if(isset($_SESSION['profile'])): ?>
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

                <form action="" method="post">
                    <section class="container-alternative">
                        <div class="content">
                            <img src="../images\circAND.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="w" name="al1"><span>Função <u>OU</u></span></div>
                            <div class="alternative"><input type="radio" value="r" name="al1"><span>Função <u>E</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\circXOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al2"><span>Função <u>OU EX.</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al2"><span>Função <u>OU</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\circXNOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al3"><span>Função <u>COINC</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al3"><span>Função <u>E</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\circOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al4"><span>Função <u>OU</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al4"><span>Função <u>COINC</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionNOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al5"><span>Função <u>NÃO OU</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al5"><span>Função <u>OU EX.</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionXNOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al6"><span>Função <u>COINC</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al6"><span>Função <u>E</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionXOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al7"><span>Função <u>OU EX.</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al7"><span>Função <u>OU</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionANDplusNOT.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al8"><span>Função <u>NÃO E</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al8"><span>Função <u>NÃO</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionAND.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al9"><span>Função <u>E</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al9"><span>Função <u>NÃO</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionORplusNOT.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="w" name="al10"><span>Função <u>NÃO E</u></span></div>
                            <div class="alternative"><input type="radio" value="r" name="al10"><span>Função <u>NÃO OU</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al11"><span>Função <u>OU</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al11"><span>Função <u>E</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\functionNAND.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="w" name="al12"><span>Função <u>COINC</u></span></div>
                            <div class="alternative"><input type="radio" value="r" name="al12"><span>Função <u>NÃO AND</u></span></div>
                        </div>
                        
                        <div class="content">
                            <img src="../images\tabelaVerAND.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al13"><span>Função <u>E</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al13"><span>Função <u>COINC</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\tabelaVerNAND.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al14"><span>Função <u>NÃO E</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al14"><span>Função <u>OU EX.</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\tabelaVerNOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="w" name="al15"><span>Função <u>OU EX.</u></span></div>
                            <div class="alternative"><input type="radio" value="r" name="al15"><span>Função <u>NÃO OU</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\tabelaVerOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="w" name="al16"><span>Função <u>E</u></span></div>
                            <div class="alternative"><input type="radio" value="r" name="al16"><span>Função <u>OU</u></span></div>
                        </div>
                        
                        <div class="content">
                            <img src="../images\tabelaVerXOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="w" name="al17"><span>Função <u>NÃO</u></span></div>
                            <div class="alternative"><input type="radio" value="r" name="al17"><span>Função <u>OU EX.</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\tabelaVerNOT.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al18"><span>Função <u>NÃO</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al18"><span>Função <u>COINC</u></span></div>
                        </div>

                        <div class="content">
                            <img src="../images\tabelaVerXNOR.png" alt="logozinDeCria">
                            <div class="alternative"><input type="radio" value="r" name="al19"><span>Função <u>COINC</u></span></div>
                            <div class="alternative"><input type="radio" value="w" name="al19"><span>Função <u>OU</u></span></div>
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
                            <span class="game-button" id="wire-button" onclick="wireChange()">Fechar</span>
                            <div>
                                <canvas id="wireCanvas" width="245" height="180"></canvas>
                                <div class="switch-line" id="switch-line-open"></div>
                                <div class="light" id="light1"></div>
                                <div class="bulb" id="wire-empty"></div>
                            </div>
                        </div>
                    </section>

                    <?php
                        require_once("fix/calc/pts-ex-calc.php");

                        pts_calc($_POST,$db,19,0);
                    ?>

                    <section class="next-ex">
                            <div class="game-button">Pressione para
                                <button class="transparent botton-line-important">enviar suas respostas ;)</button>
                            </div>
                    </section>
                </form>
                <section class="next-ex">
                        <div class="game-button">
                            <a href="<?php
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
                            ?>" class="transparent botton-line-important">Vamos começar!</a>
                        </div>
                </section>
            <?php else: ?>
                <section>
                    Oh não, ainda não possui conta? <a href="base?file=account&_file=sign-in">Então crie uma agora!</a>
                </section>
            <?php endif; ?>
        </main>

        <?php
            include("fix/footer/game-footer.php");
        ?>
    </body>