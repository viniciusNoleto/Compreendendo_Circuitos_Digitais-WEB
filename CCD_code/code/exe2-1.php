<form action="" method="post">

    <section class="teacher-dialogue">
        <img src="../images\teacher.png" alt="teacher">
        <div class="teacher-dialog-text">
            <span class="typeWrite">
                <?php
                    include("fix/teacher-dialogues/".$_SESSION['profile']['teacher']."/ex2-dialogue.php");
                ?>
            </span>
        </div>
        <div class="ex-quest">
            <div>
                <span>1.</span>
                <h3>S = A + B</h3>
                <div class="img-base"><img src="../images/ex2-base.gif" alt="quest1"></div>
                <div id="answer" class="drop-target" style="left:220px;top:30px;"></div>
                <input type="hidden" name="h">
            </div>
        </div>
    </section>
    
    <section class="container-alternative-drag">
        <div class="drop-target"><span>1</span><div id="w" draggable="true"><img src="../images/functionForExAND.png" alt=""></div></div>
        <div class="drop-target"><span>2</span><div id="r" draggable="true"><img src="../images/functionForExOR.png" alt=""></div></div>
        <div class="drop-target"><span>3</span><div id="w" draggable="true"><img src="../images/functionForExNAND.png" alt=""></div></div>
        <div class="drop-target"><span>4</span><div id="w" draggable="true"><img src="../images/functionForExNOT.png" alt=""></div></div>
    </section>
    
    <section class="next-ex">
        <div class="game-button">
            <?php pts_calc($_POST,$db,8,2); ?>

            <button class="botton-line-important transparent">Pressione para enviar sua resposta ;)</button>
        </div>
    </section>
</form>

<section class="next-ex">
    <div class="game-button">
        <a class="botton-line-important" href="<?php nextExCalc("has_completed_lvl2exe1",2,$db,$_SESSION) ?>">Vamos para a próxima fase!</a>
    </div>
</section>