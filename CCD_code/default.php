<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>default</title>
        <?php
            include("fix-styles/links.php");
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
            
        </main>

        <footer class="footer">
            <section id="site-info">
                <h3>Informações</h3>
                <p>
                    <?php
                        include("fix-txts/footer-txt.php");
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
                <h3>Contatos</h3>
                <div class="social-media">
                    <div id="social-media-msg">
                        <p>Mande um email diretamente</p>
                        <a href="mailto: noleto.vinicius.a@gmail.com" class="fa fa-google"  target="_blank" rel="noopener noreferrer"></a>
                    </div>
                    <div id="social-media-msg">
                        <p>Me siga no instagram!</p>
                        <a href="https://www.instagram.com/noletovini/" class="fa fa-instagram"  target="_blank" rel="noopener noreferrer"></a>
                    </div>
                    <div id="social-media-msg">
                        <p>Acesse meu github</p>
                        <a href="https://github.com/viniciusNoleto" class="fa fa-github"  target="_blank" rel="noopener noreferrer"></a>
                    </div>
                </div>
            </section>
        </footer>
    </body>
</html>