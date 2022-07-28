
<form action="" method="post">

    <section class="teacher-dialogue">
        <img src="../images\teacher.png" alt="teacher">
        <div class="teacher-dialog-text">
            <span class="typeWrite">
                <?php
                    include("fix/teacher-dialogues/".$_SESSION['profile']['teacher']."/ex3-dialogue.php");
                ?>
            </span>
        </div>
        <div class="ex-quest">
            <div>
                <span>5.</span>
                <div><img src="../images/tabelaVerNOR.png" alt="quest5"></div>
                <div class="img-base"><img src="../images/ex2-base.gif" alt="quest1"></div>
                <div id="answer" class="drop-target" style="left:220px;top:30px;"></div>
                <input type="hidden" name="h">
            </div>
        </div>
    </section>
    
    <section class="container-alternative-drag">
        <div class="drop-target"><div id="w" draggable="true"><img src="../images/functionForExXOR.png" alt=""></div></div>
        <div class="drop-target"><div id="w" draggable="true"><img src="../images/functionForExNOT.png" alt=""></div></div>
        <div class="drop-target"><div id="w" draggable="true"><img src="../images/functionForExAND.png" alt=""></div></div>
        <div class="drop-target"><div id="r" draggable="true"><img src="../images/functionForExNOR.png" alt=""></div></div>
    </section>
    
    <section class="next-ex">
        <div class="game-button">
            <?php pts_calc($_POST,$db,30,3); ?>

            <button class="botton-line-important transparent">Pressione para enviar sua resposta ;)</button>
        </div>
    </section>
</form>

<section class="next-ex">
    <div class="game-button">
        <a class="botton-line-important" href="<?php nextExCalc("has_completed_lvl3exe5",3,$db,$_SESSION) ?>">Vamos para a próxima fase!</a>
    </div>
</section>

