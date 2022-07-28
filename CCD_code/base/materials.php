
    <head>
        <meta charset="UTF-8">
        <title>CCD - Materials</title>

        <link rel="stylesheet" href="../assets/materials-style.css">
        <?php
            include("fix/links.php");
        ?>

        <script src="../assets/accordion.js" defer></script>
        <script src="../assets/anchor.js" defer></script>
    </head>
    <body>
        <?php
            include("fix/header.php");
        ?>
        <div class="fill"></div>
        <nav class="menu">
            <a href="base?file=quest">JOGAR</a>
            <a href="../index.php">HOME</a>
            <a href="base?file=results">RESULTADOS</a>
        </nav>

        <main class="main">
            <div id="subject-call">
                <div id="subject-call-title">
                    <h1>CIRCUITOS DIGITAIS: FUNÇÕES, TABELAS VERDADES e SOLUÇÕES </h1>
                    <h5>Uma breve introdução ao assunto</h5>
                </div>
                <div id="subject-call-img">
                    <img src="..\images/Integrated circuits and components.jpg" id="subject-call-img1">
                </div>
            </div>

            <div id="subject-info">
                <div id="subject-info-text">
                    <div class="subject-info-text-title" id="TOP1">
                        <span>Funções em Circuitos</span>
                    </div>
                    <div class="subject-info-text-text">
                        <div>
                            <div>
                                <h2 id="T">Introdução de Funções Lógicas</h2>
                                <p>Nas funções lógicas há apenas dois estados distintos, 0 e 1, podendo representar estados distintos, como ligado e desligado, fechado e aberto, ausência ou presença de tensão e etc. Logo, caso um valor ou estado seja atribuído a 0, entende-se que o valor contrário será atribuído a 1.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T1">Função "E" ou "AND"</h2>
                                <p>Neste circuito é possível compreender de forma visual o conceito da função AND, onde caso a primeira porta estiver aberta e a segunda fechada, ou caso a primeira porta estiver fechada e a segunda aberta ou caso as duas portas estiverem abertas, o circuito <u>não irá funcionar</u>, sendo necessário a primeira E a segunda porta estarem fechadas para o funcionamento do circuito.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\circAND.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T2">Função "OU" ou "OR"</h2>
                                <p>Neste circuito é possível compreender de forma visual o conceito da função OR, onde caso a primeira porta estiver aberta e a segunda fechada, ou caso a primeira porta estiver fechada e a segunda aberta ou caso as duas portas estiverem fechadas, o circuito <u>irá funcionar</u>, ou seja, é necessário a primeira OU a segunda porta estarem fechadas para o funcionamento do circuito. O único caso em que o caso o circuito <u>não irá funcionar</u> será quando <u>as duas portas estiverem abertas</u>.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\circOR.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T3">Função "NÃO" ou "NOT"</h2>
                                <p>Neste circuito é possível compreender de forma visual o conceito da função NOT, <u>onde somente no caso da porta estar aberta o circuito irá funcionar</u>, pois, caso a porta estiver fechada, irá gerar um curto-circuito, fazendo com que o mesmo NÃO funcione.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\circNOT.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T4">Função "OU EXCLUSIVO" ou "XOR"</h2>
                                <p>Neste circuito é possível compreender de forma visual o conceito da função XOR, onde caso a primeira porta estiver aberta e a segunda fechada ou caso a primeira porta estiver fechada e a segunda aberta o circuito <u>irá funcionar</u>, mas caso as duas estiverem abertas ou caso as duas estiverem fechadas o circuito <u>não irá funcionar</u>, logo, é necessário que APENAS a primeira OU a segunda porta esteja fechada para o funcionamento do circuito.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\circXOR.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T5">Função "COINCIDENCIA" ou "XNOR"</h2>
                                <p>Neste circuito é possível compreender de forma visual o conceito da função XOR, onde caso a primeira porta estiver aberta e a segunda fechada ou caso a primeira porta estiver fechada e a segunda aberta o circuito <u>irá funcionar</u>, mas caso as duas estiverem abertas ou caso as duas estiverem fechadas o circuito <u>não irá funcionar</u>, logo, é necessário que APENAS a primeira OU a segunda porta esteja fechada para o funcionamento do circuito.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\circXNOR.png" alt="logozinDeCria">
                            </div>
                        </div>
                    </div>

                    <div class="subject-info-text-title" id="TOP2">
                        <span>Tabelas Verdades e Portas Lógicas</span>
                    </div>
                    <div class="subject-info-text-text">
                        <div>
                            <div>
                                <h2 id="T6">Porta Lógica <u>AND</u></h2>
                                <p>A porta lógica <b>AND</b> apenas retornará um valor verdadeiro no caso em que as duas entradas sejam verdadeiras, logo, é uma porta em que haverá sempre apenas um único valor verdadeiro em sua tabela verdade.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\functionANDplusTabelaVerAND.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T7">Porta Lógica <u>OR</u></h2>
                                <p>A porta lógica <b>OR</b> apenas retornará um valor falso no caso em que as duas entradas sejam falsas, logo, é uma porta em que haverá sempre apenas um único valor falso em sua tabela verdade.</p>
                            </div>
                            <div>
                                <img src="..\images\functionORplusTabelaVerOR.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T8">Porta Lógica <u>NOT</u></h2>
                                <p>A porta lógica <b>NOT</b> é uma porta que inverte o valor atual, ou seja, caso o valor seja 1 (verdadeiro por assim dizer) ao passar por esta porta o mesmo torna-se 0 (falso) e da mesma forma o contrário também ocorre, onde quando um valor 0 passa por esta porta o mesmo passa a ser igual a 1.</p>
                            </div>
                            <div>
                                <img src="..\images\functionNOTplusTabelaVerNOT.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2>Porta Lógica <u>NOT AND</u> e <u>NOT OR</u></h2>
                                <p>As portas <b>NOT AND</b> (também conhecidas como <b>NAND</b>) e <b>NOT OR</b> (também conhecidas como <b>NOR</b>) são bastante utilizadas no contexto dos circuitos digitais, tendo suas prórprias representações utilizando-se dos símbolos das portas <b>AND</b> e <b>OR</b> somados com o circulo característico da porta <b>NOT</b> logo após o final dos mesmos. (respectivas representações nos dois próximos pontos deste material)</p>
                            </div>
                            <div>
                                <img src="..\images\functionANDplusNOT+ORplusNOT.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T9">Porta Lógica <u>NAND</u></h2>
                                <p>A porta lógica AND apenas retornará um valor verdadeiro no caso em que as duas entradas sejam verdadeiras, logo, é uma porta em que haverá sempre apenas um único valor verdadeiro em sua tabela verdade.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\functionNANDplusTabelaVerNAND.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T10">Porta Lógica <u>NOR</u></h2>
                                <p>Neste circuito é possível compreender de forma visual o conceito da função XOR, onde caso a primeira porta estiver aberta e a segunda fechada ou caso a primeira porta estiver fechada e a segunda aberta o circuito <u>irá funcionar</u>, mas caso as duas estiverem abertas ou caso as duas estiverem fechadas o circuito <u>não irá funcionar</u>, logo, é necessário que APENAS a primeira OU a segunda porta esteja fechada para o funcionamento do circuito.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\functionNORplusTabelaVerNOR.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T11">Porta Lógica <u>XOR</u></h2>
                                <p>A porta lógica AND apenas retornará um valor verdadeiro no caso em que as duas entradas sejam verdadeiras, logo, é uma porta em que haverá sempre apenas um único valor verdadeiro em sua tabela verdade.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\functionXORplusTabelaVerXOR.png" alt="logozinDeCria">
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2 id="T12">Porta Lógica <u>XNOR</u></h2>
                                <p>Neste circuito é possível compreender de forma visual o conceito da função XOR, onde caso a primeira porta estiver aberta e a segunda fechada ou caso a primeira porta estiver fechada e a segunda aberta o circuito <u>irá funcionar</u>, mas caso as duas estiverem abertas ou caso as duas estiverem fechadas o circuito <u>não irá funcionar</u>, logo, é necessário que APENAS a primeira OU a segunda porta esteja fechada para o funcionamento do circuito.
                                </p>
                            </div>
                            <div>
                                <img src="..\images\functionXNORplusTabelaVerXNOR.png" alt="logozinDeCria">
                            </div>
                        </div>
                    </div>
                </div>

                <section style="height: 100%;">
                    <aside>
                        <h3>Navegue rapidamente</h3>
                        <nav>
                            <button class="accordion">Circuitos</button>
                            <div>
                                <a href="#T1">Circuito E</a>
                                <a href="#T2">Circuito OU</a>
                                <a href="#T3">Circuito NÃO</a>
                                <a href="#T4">Circuito OU EXCLUSIVO</a>
                                <a href="#T5">Circuito COINCIDENCIA</a>
                            </div>
                            <button class="accordion">Portas Lógicas</button>
                            <div>
                                <a href="#T6">Porta Lógica AND</a>
                                <a href="#T7">Porta Lógica OR</a>
                                <a href="#T8">Porta Lógica NOT</a>
                                <a href="#T9">Porta Lógica NAND</a>
                                <a href="#T10">Porta Lógica NOR</a>
                                <a href="#T11">Porta Lógica XOR</a>
                                <a href="#T12">Porta Lógica XNOR</a>
                            </div>
                        </nav>
                    </aside>
                </section>
            </div>
        </main>

        <?php
            include("fix/footer/standard-footer.php");
        ?>

    </body>