
<section class="teacher-dialogue">
    <img src="..\images\teacher.png" alt="teacher">
    <div class="teacher-dialog-text">
        <span class="typeWrite">
            Boa pique! Tá trazendo recurso pra tropa!
        </span>
    </div>
</section>

<?php

    $sql_consult = "SELECT coins, lvl1_evaluation FROM `student` WHERE `id` = ?";

    $stmt_consult = $db->prepare($sql_consult);
    $stmt_consult->bind_param("i",$_SESSION['profile']['id']);
    $stmt_consult->execute();
    $result_consult = $stmt_consult->get_result()->fetch_assoc();

    $total_coins = intval($result_consult['coins']) + floor(floatval($result_consult['lvl1_evaluation']));


    $sql_update = "UPDATE `student` SET has_completed_lvl1exe1 = 0, has_completed_lvl1exe2 = 0, has_completed_lvl1exe3 = 0, has_completed_lvl1exe4 = 0, has_completed_lvl1exe5 = 0, has_completed_lvl1=1, coins=? WHERE `id`=?";

    $stmt_update = $db->prepare($sql_update);
    $stmt_update->bind_param("ii",$total_coins,$_SESSION['profile']['id']);
    $stmt_update->execute();

?>

<section class="next-ex">
    <div class="game-button">
        <form action="base?file=lvl2&_file=exe2-<?php echo rand(1,8); ?>" method="post">
            <button class="botton-line-important transparent">Próximo level!</button>
        </form>
    </div>
</section>
 