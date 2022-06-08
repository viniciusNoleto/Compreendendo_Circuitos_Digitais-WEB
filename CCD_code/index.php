<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>CCD - Home</title>

        <link rel="stylesheet" href="assets/carousel-style.css">
        <link rel="stylesheet" href="assets/home-style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
        
        <?php
            include("fix/links.php");
        ?>
    </head>
    <body>
        <header class="header">
            <img src="images\logoSite.png" alt="logozinDeCria">
            <p>
                COMPREENDENDO CIRCUITOS DIGITAIS
            </p>
        </header>
        <div class="menu">
            <a href="materials.php">MATERIAL</a>
            <a href="quest.php">JOGAR</a>
            <a href="temp.php">MODIFICAÇÕES</a>
            <a href="temp.php">RESULTADOS</a>
        </div>


        <main class="main">
            <section class="top-cards">
                <section class="top-cards-info">
                    
                </section>
                <section class="top-cards-cards">
                        <div class="conteiner-carousel">
                            <input type="radio" name="carousel" checked/>
                            <input type="radio" name="carousel"/>
                            <input type="radio" name="carousel"/>
                            <input type="radio" name="carousel"/>
                            <input type="radio" name="carousel"/>
                            <div id="carousel">
                                <div class="carousel-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti eveniet praesentium labore eius fuga dolor quam temporibus molestiae nesciunt sequi necessitatibus ipsa, eligendi, ab officiis modi magnam quod voluptas sint?</div>
                                <div class="carousel-item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, qui velit? Quo minus molestiae, rem consectetur ducimus dolores officiis fugit illum adipisci quis enim accusantium labore, optio placeat soluta quasi.</div>
                                <div class="carousel-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, praesentium doloremque? Dolores odio quaerat provident placeat mollitia sed voluptatem, quidem officia! Consectetur eveniet in reiciendis odio dolor ad deleniti veniam?</div>
                                <div class="carousel-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi aliquam recusandae minus eius? Ex nam cumque totam quod nemo libero dolorem. Id molestias maiores autem atque quos itaque veniam repudiandae?</div>
                                <div class="carousel-item">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id veritatis dolor praesentium, nisi iste sed rerum voluptate qui facere itaque. Accusamus cupiditate impedit culpa beatae vel in molestiae ipsam recusandae.</div>
                            <div>
                        </div>
                </section>
            </section>
            <section class="proposal">
                <div class="proposal-txt">
                    
                </div>
                <div class="proposal-nav">
                    
                </div>
            </section>
        </main>

        <footer class="footer">
            <section id="site-info">
                <h3>Informações</h3>
                <p>
                    <?php
                        include("fix/footer-txt.php");
                    ?>
                </p>
            </section>
            <section id="site-links">
                <h3>Links</h3>
                <div class="links-columns">
                    <div>
                        <h4>Livros</h4>
                        <ul>
                            <li><a href="">livro 1</a></li>
                            <li><a href="">livro 2</a></li>
                            <li><a href="">livro 3</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Artigos</h4>
                        <ul>
                            <li><a href="">artigo 1</a></li>
                            <li><a href="">artigo 2</a></li>
                            <li><a href="">artigo 3</a></li>
                        </ul>
                    </div>
                    <diV>
                        <h4>Autores</h4>
                        <ul>
                            <li><a href="">autor 1</a></li>
                            <li><a href="">autor 2</a></li>
                            <li><a href="">autor 3</a></li>
                        </ul>
                    </diV>
                </div>
            </section>
            <section>
                <?php
                    include("fix/footer-social-media.php");
                ?>
            </section>
        </footer>

      <script>
        
      </script>
    </body>
</html>