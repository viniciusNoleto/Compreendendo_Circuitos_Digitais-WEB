
<?php

    function pts_calc($POST,$db,$max,$acLevel){
        $levels = ["lvl0_evaluation","lvl1_evaluation","lvl2_evaluation","lvl3_evaluation"];
        $level = $levels[$acLevel];

        $count_radios = [];
    
        foreach($POST as $radios){
            if($radios == "r"){$count_radios[] = $radios;};
        }
    
        $pts = round(count($count_radios) * (10/$max),2);
    
        $sql_calc_increase = "SELECT ".$level." FROM student WHERE id=".$_SESSION['profile']['id'];
        $stmt_calc_increase = $db->query($sql_calc_increase);
        $calc_increase_results = $stmt_calc_increase->fetch_assoc();
        
        foreach($calc_increase_results as $calc_increase_result){
            if($acLevel > 0){$pts += $calc_increase_result;};
            
            $pts = $pts>10 ? 10:$pts;
    
            $sql_increase = "UPDATE student SET ".$level."=".$pts." WHERE id=".$_SESSION['profile']['id'];
            $stmt_increase = $db->query($sql_increase);
        }
    }
    
?>
