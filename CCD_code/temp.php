<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>default</title>
        
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
            <a href="index.php">HOME</a>
            <a href="temp.php">MODIFICAÇÕES</a>
            <a href="temp.php">RESULTADOS</a>
        </div>


        <main class="main" style="text-align: center;">
            <img src="images\temp.gif"><br>
            <p style="color: red; font-size: 38px">CALMA LÁ PATRÃO</p>
        </main>

        <footer class="footer">
            <section id="site-info">
                <h3>Informações</h3>
                <?php
                    include("fix/footer-txt.php");
                ?>
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
    </body>
</html>