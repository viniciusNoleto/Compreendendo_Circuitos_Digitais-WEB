
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
                <span>8.</span>
                <div><img src="../images/ex2-tabelaVer-img (3).png" alt="quest1"></div>
                <div class="img-base"><img src="../images/ex2-base-2.gif" alt="quest1"></div>
                <div id="answer" class="drop-target 1" style="left:172px;top:2px;"><span>1</span></div>
                <input type="hidden" name="h">
                <div id="answer" class="drop-target 2" style="left:378px;top:58px;"><span>2</spa></div>
                <input type="hidden" name="h">
            </div>
        </div>
    </section>
    
    <section class="container-alternative-drag">
        <b>1</b>
        <div class="drop-target"><div id="r" class="1" draggable="true"><img src="../images/functionForExXNOR.png" alt=""></div></div>
        <div class="drop-target"><div id="w" class="1" draggable="true"><img src="../images/functionForExXOR.png" alt=""></div></div>
        <div class="drop-target"><div id="w" class="1" draggable="true"><img src="../images/functionForExNOR.png" alt=""></div></div>
        <div class="drop-target"><div id="w" class="1" draggable="true"><img src="../images/functionForExOR.png" alt=""></div></div>
        <b>2</b>
        <div class="drop-target"><div id="w" class="2" draggable="true"><img src="../images/functionForExNOT.png" alt=""></div></div>
        <div class="drop-target"><div id="w" class="2" draggable="true"><img src="../images/functionForExXOR.png" alt=""></div></div>
        <div class="drop-target"><div id="w" class="2" draggable="true"><img src="../images/functionForExOR.png" alt=""></div></div>
        <div class="drop-target"><div id="r" class="2" draggable="true"><img src="../images/functionForExAND.png" alt=""></div></div>
    </section>
    
    <section class="next-ex">
        <div class="game-button">
            <?php pts_calc($_POST,$db,15,3); ?>

            <button class="botton-line-important transparent">Pressione para enviar suas respostas ;)</button>
        </div>
    </section>
</form>

<section class="next-ex">
    <div class="game-button">
        <a class="botton-line-important" href="<?php nextExCalc("has_completed_lvl3exe8",3,$db,$_SESSION) ?>">Vamos para a próxima fase!</a>
    </div>
</section>

