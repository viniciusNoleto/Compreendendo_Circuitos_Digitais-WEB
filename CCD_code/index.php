<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>CCD - Home</title>

        <link rel="stylesheet" href="../assets/home-style.css">
        <link rel="stylesheet" href="../assets/carousel-style.css">

        <?php
            session_start();
            require("fix/links.php");
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
            <a href="CCD.php/base?file=account&_file=login">CONTA</a>
            <a href="CCD.php/base?file=temp">MODIFICAÇÕES</a>
            <a href="CCD.php/base?file=temp">RESULTADOS</a>
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
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eveniet praesentium labore eius fuga dolor quam temporibus molestiae nesciunt sequi necessitatibus ipsa, eligendi, ab officiis modi magnam quod voluptas sint?
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, qui velit? Quo minus molestiae, rem consectetur ducimus dolores officiis fugit illum adipisci quis enim accusantium labore, optio placeat soluta quasi.
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, praesentium doloremque? Dolores odio quaerat provident placeat mollitia sed voluptatem, quidem officia! Consectetur eveniet in reiciendis odio dolor ad deleniti veniam?
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aliquam recusandae minus eius? Ex nam cumque totam quod nemo libero dolorem. Id molestias maiores autem atque quos itaque veniam repudiandae?
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id veritatis dolor praesentium, nisi iste sed rerum voluptate qui facere itaque. Accusamus cupiditate impedit culpa beatae vel in molestiae ipsam recusandae.
                            </div>
                        </div>
                    </section>
                </section>
            </section>
            <section>
                <?php
                    
                ?>
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