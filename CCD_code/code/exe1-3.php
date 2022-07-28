
<form action="" method="post">
    
    <section class="teacher-dialogue">
        <img src="../images\teacher.png" alt="teacher">
        <div class="teacher-dialog-text">
            <span class="typeWrite">
                <?php
                    include("fix/teacher-dialogues/".$_SESSION['profile']['teacher']."/ex1-dialogue.php");
                ?>
            </span>
        </div>
        <div class="ex-quest">
            <div>
                <span>3.</span>
                <div><img src="../images/gifCircNOT.gif" alt="quest1"></div>
            </div>
        </div>
    </section>
    
    <section class="container-alternative">
        <div class="content">
            <img src="../images\tabelaVerOR.png" alt="logozinDeCria">
            <div class="alternative"><input type="radio" name="al1"><span>Função <u>OU</u></span></div>
        </div>
    
        <div class="content">
            <img src="../images\tabelaVerXNOR.png" alt="logozinDeCria">
            <div class="alternative"><input type="radio" name="al1"><span>Função <u>COINC</u></span></div>
        </div>
    
        <div class="content">
            <img src="../images\tabelaVerNOT.png" alt="logozinDeCria">
            <div class="alternative"><input type="radio" value="r" name="al1"><span>Função <u>NÃO</u></span></div>
        </div>
    
        <div class="content">
            <img src="../images\tabelaVerXOR.png" alt="logozinDeCria">
            <div class="alternative"><input type="radio" name="al1"><span>Função <u>OU EX.</u></span></div>
        </div>
    </section>
    
    <section class="next-ex">
        <div class="game-button">
            <?php pts_calc($_POST,$db,5,1); ?>

            <button class="botton-line-important transparent">Pressione para enviar sua resposta ;)</button>
        </div>
    </section>

</form>

<section class="next-ex">
    <div class="game-button">
        <a href="<?php nextExCalc("has_completed_lvl1exe3",1,$db,$_SESSION) ?>" class="botton-line-important">Vamos para a próxima fase!</a>
    </div>
</section>
