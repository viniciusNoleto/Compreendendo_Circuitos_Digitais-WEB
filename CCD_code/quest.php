<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>default</title>

        <link rel="stylesheet" type="text/css" href="assets/game-style.css">
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
            <a href="index.php">HOME</a>
            <a href="temp.php">MODIFICAÇÕES</a>
        </div>


        <main class="main">
            <div class="container">
                <div class="grid-container-H">
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\circAND.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>E</u></b><input type="radio" name="op1" ></span>
                            <span class="option"><b>Função <u>OU</u></b><input type="radio" name="op1"></span>
                        </div>
                    </div>
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\functionANDplusNOT.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>NÃO E</u></b><input type="radio" name="op2"></span>
                            <span class="option"><b>Função <u>NÃO OU</u></b><input type="radio" name="op2"></span>
                        </div>
                    </div>
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\functionAND.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>OU</u></b><input type="radio" name="op3"></span>
                            <span class="option"><b>Função <u>AND</u></b><input type="radio" name="op3"></span>
                        </div>
                    </div>
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\circOR.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>OR</u></b><input type="radio" name="op4"></span>
                            <span class="option"><b>Função <u>E</u></b><input type="radio" name="op4"></span>
                        </div>
                    </div>
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\functionNOR.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>NOT OR</u></b><input type="radio" name="op5"></span>
                            <span class="option"><b>Função <u>NOT AND</u></b><input type="radio" name="op5"></span>
                        </div>
                    </div>
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\functionXNOR.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>XOR</u></b><input type="radio" name="op6"></span>
                            <span class="option"><b>Função <u>COINCIDENCIA</u></b><input type="radio" name="op6"></span>
                        </div>
                    </div>
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\functionXOR.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>XNOR</u></b><input type="radio" name="op7"></span>
                            <span class="option"><b>Função <u>OU EXCLUSIVO</u></b><input type="radio" name="op7"></span>
                        </div>
                    </div>
                    <div class="grid-container-V">
                        <div id="img-quest-div">
                            <img src="images\circXOR.png" alt="logozinDeCria">
                        </div>
                        <div>
                            <span class="option"><b>Função <u>XOR</u></b><input type="radio" name="op8"></span>
                            <span class="option"><b>Função <u>XNOR</u></b><input type="radio" name="op8"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-container-H" id="one-column-only">
                <input type="submit" id="submit-button" value="Continuar">
            </div>
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