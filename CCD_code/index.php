<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>CCD - Home</title>

        <link rel="stylesheet" href="../assets/carousel-style.css">
        <link rel="stylesheet" href="../assets/home-style.css">

        <?php
            session_start();
            require("fix/links.php");
            require_once "db-conect.php"; $db = connect_db(); 
        ?>
    </head>
    <body>
        <header>
            <img src="..\images\logoSite.png" alt="logozinDeCria">
            <p>
                COMPREENDENDO CIRCUITOS DIGITAIS
            </p>
            <div class="profile">
                <div class="profile-img">
                    <img src="../images/avatar (<?php 
                                                    if(isset($_SESSION['profile'])){
                                                        echo($_SESSION['profile']['avatar']);
                                                    }else{
                                                        echo "0";
                                                    };
                                                ?>).png" alt="avatar" class="avatar">
                    <?php if(isset($_SESSION['profile'])): ?>
                        <a href="CCD.php/base?file=account&_file=modify-account" class="gear"><img src="../images/gear.png" alt="gear"></a>
                    <?php endif;?>
                </div>
                <div class="profile-name">
                    <?php
                        if(isset($_SESSION['profile'])){
                            echo($_SESSION['profile']['name']);
                        }else{
                            echo ('<a href="CCD.php/base?file=account&_file=login" class="botton-line-important">Login</a>');
                        };
                    ?>
                </div>
            </div>
        </header>
        <nav class="menu">
            <a href="CCD.php/base?file=materials">MATERIAL</a>
            <a href="CCD.php/base?file=quest">JOGAR</a>
            <a href="CCD.php/base?file=modify">MODIFICAÇÕES</a>
            <a href="CCD.php/base?file=results">RESULTADOS</a>
        </nav>
        <div class="fill"></div>


        <main class="main">
            <section>
                <section class="conteiner-carousel">
                    <input class="carousel-input" id=carousel-input1 type="radio" name="carousel">
                    <input class="carousel-input" id=carousel-input2 type="radio" name="carousel">
                    <input class="carousel-input" id=carousel-input3 type="radio" name="carousel" checked>
                    <input class="carousel-input" id=carousel-input4 type="radio" name="carousel">
                    <input class="carousel-input" id=carousel-input5 type="radio" name="carousel">
                    <section class="carousel">
                        <div class="carousel-item">
                            <div>
                                <img src="/images/lifelong_learning.jpg" alt=""><br>
                                O mundo da tecnologia é inimaginavelmente grande!!
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="/images/thumb-1920-456498.jpg" alt=""><br>
                                Inicie seus estudos sobre circuitos para no futuro poder trabalhar com hardware!!
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="/images/Cat-study-hard-reading-book_1920x1200.jpg" alt=""><br>
                                Estude conosco de forma simples, interativa e divertida para aumentar seu rendimento na matéria de Circuitos Digitais!!
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="/images/programming-code-abstract-screen-of-software-developer-2194062.jpg" alt=""><br>
                                Está curioso sobre a programação do site? Entre no GitHub da nossa equipe disponível no final da página e leia o código na íntegra ;)
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                <img src="/images/lighting-bulb-light-bulb-light-fixture-wallpaper-preview.jpg" alt=""><br>
                                Entenda o funcionamento de circuitos com exemplos do dia a dia, como lâmpadas!!
                            </div>
                        </div>
                    </section>
                </section>
            </section>

            <br><br>

            <section class="home-main">
                <section class="container-bests-students">
                    <h1>NOSSOS MELHORES ALUNOS</h1>
                    <section class="bests-students">
                        <div>
                            <div>
                                <img src="/images/avatar (2).png" alt="">
                                <span>1°: João Kléber</span>
                            </div>
                            <span class="pts">38 pontos</span>
                        </div>
                        <div>
                            <div>
                                <img src="/images/avatar (5).png" alt="">
                                <span>2°: Igara Rosiane</span>
                            </div>
                            <span class="pts">35 pontos</span>
                        </div>
                        <div>
                            <div>
                                <img src="/images/avatar (3).png" alt="">
                                <span>3°: Rei dos Circuitos</span>
                            </div>
                            <span class="pts">34 pontos</span>
                        </div>
                        <div>
                            <div>
                                <img src="/images/avatar (4).png" alt="">
                                <span>4°: Ana Aszhakov</span>
                            </div>
                            <span class="pts">30 pontos</span>
                        </div>
                    </section>
                </section>
                <section>
                    <section class="container-bests-students">
                        <h1>ASSUNTOS QUE TEM CAUSADO MAIS ERRO</h1>
                        <section class="subject-to-study">
                            <div>
                                1°: <a class="botton-line-important" href="CCD.php/base?file=materials#T12" target="_blank" rel="noopener noreferrer">Porta Lógica XNOR</a>
                            </div>
                            <div>
                                2°: <a class="botton-line-important" href="CCD.php/base?file=materials#T5" target="_blank" rel="noopener noreferrer">Circuito Coincidência</a>
                            </div>
                            <div>
                                3°: <a class="botton-line-important" href="CCD.php/base?file=materials#T10" target="_blank" rel="noopener noreferrer">Porta Lógica NOR</a>
                            </div>
                        </section>
                    </section>
                </section>
            </section>
        </main>

        <?php
            include("fix/footer/standard-footer.php");
        ?>

        <script>
        
            var carouselInputArrey = [1,"carousel-input3","carousel-input4","carousel-input5","carousel-input1","carousel-input2"];
            
            var carouselCheckTimer = setInterval(function() {
                document.getElementById(carouselInputArrey[carouselInputArrey[0]]).checked = true;
                carouselInputArrey[0] < 5 ? carouselInputArrey[0]++ : carouselInputArrey[0]=1;
            }, 10*1000);

            document.querySelectorAll('input[type="radio"]').forEach(input => {
                input.addEventListener('click', function () {
                    clearInterval(carouselCheckTimer);

                    for (var j = 1;j<carouselInputArrey.length;j++) {
                        if (input.id == carouselInputArrey[j]) {
                            carouselInputArrey[0]=j;
                        };
                    };

                    carouselCheckTimer = setInterval(function() {
                        document.getElementById(carouselInputArrey[carouselInputArrey[0]]).checked = true;
                        carouselInputArrey[0] < 5 ? carouselInputArrey[0]++ : carouselInputArrey[0]=1;
                    }, 10*1000);
                });
            });

        </script>
    </body>

</html>