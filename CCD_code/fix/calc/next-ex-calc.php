<?php
    function nextExCalc($actual_ex,$lvl,$db,$SESSION){

        $sql_update = "UPDATE `student` SET $actual_ex=1 WHERE `id` = ?";
                            
        $stmt_update = $db->prepare($sql_update);
        $stmt_update->bind_param("i",$SESSION['profile']['id']);
        $stmt_update->execute();

        $sql_check = "";
        
        if($lvl == 1){
            $sql_check = "SELECT has_completed_lvl1exe1, has_completed_lvl1exe2, has_completed_lvl1exe3, has_completed_lvl1exe4, has_completed_lvl1exe5 FROM `student` WHERE `id` = ?";
        }elseif($lvl == 2){
            $sql_check = "SELECT has_completed_lvl2exe1, has_completed_lvl2exe2, has_completed_lvl2exe3, has_completed_lvl2exe4, has_completed_lvl2exe5, has_completed_lvl2exe6, has_completed_lvl2exe7, has_completed_lvl2exe8 FROM `student` WHERE `id` = ?";
        }elseif($lvl == 3){
            $sql_check = "SELECT has_completed_lvl3exe1, has_completed_lvl3exe2, has_completed_lvl3exe3, has_completed_lvl3exe4, has_completed_lvl3exe5, has_completed_lvl3exe6, has_completed_lvl3exe7, has_completed_lvl3exe8, has_completed_lvl3exe9, has_completed_lvl3exe10 FROM `student` WHERE `id` = ?";
        }
        
        $stmt_check = $db->prepare($sql_check);
        $stmt_check->bind_param("i",$SESSION['profile']['id']);
        $stmt_check->execute();

        $result = $stmt_check->get_result()->fetch_assoc();

        $qtt_result = "";
        
        if($lvl == 1){$qtt_result = 5;}
        if($lvl == 2){$qtt_result = 8;}
        if($lvl == 3){$qtt_result = 10;}

        $qtt_result = $qtt_result - $result['has_completed_lvl'.$lvl.'exe1'] - $result['has_completed_lvl'.$lvl.'exe2']
                                  - $result['has_completed_lvl'.$lvl.'exe3'] - $result['has_completed_lvl'.$lvl.'exe4']
                                  - $result['has_completed_lvl'.$lvl.'exe5'];
        
        if($lvl>1){
            $qtt_result = $qtt_result - $result['has_completed_lvl'.$lvl.'exe6'] - $result['has_completed_lvl'.$lvl.'exe7'] - $result['has_completed_lvl'.$lvl.'exe8'];
            
            if($lvl==3){
                $qtt_result = $qtt_result - $result['has_completed_lvl'.$lvl.'exe9'] - $result['has_completed_lvl'.$lvl.'exe10'];
            }
        }

        $seed = "base?file=lvl".$lvl."&_file=";

        if($qtt_result>0){

            $link_result = [];
            if($result['has_completed_lvl'.$lvl.'exe1']==0){ $link_result[]=1; };
            if($result['has_completed_lvl'.$lvl.'exe2']==0){ $link_result[]=2; };
            if($result['has_completed_lvl'.$lvl.'exe3']==0){ $link_result[]=3; };
            if($result['has_completed_lvl'.$lvl.'exe4']==0){ $link_result[]=4; };
            if($result['has_completed_lvl'.$lvl.'exe5']==0){ $link_result[]=5; };

            if($lvl>1){

                if($result['has_completed_lvl'.$lvl.'exe6']==0){ $link_result[]=6; };
                if($result['has_completed_lvl'.$lvl.'exe7']==0){ $link_result[]=7; };
                if($result['has_completed_lvl'.$lvl.'exe8']==0){ $link_result[]=8; };

                if($lvl==3){

                    if($result['has_completed_lvl'.$lvl.'exe9']==0){ $link_result[]=9; };
                    if($result['has_completed_lvl'.$lvl.'exe10']==0){ $link_result[]=10; };

                };
            }
        
            $sort = rand(1,$qtt_result);

            foreach($link_result as $address => $link){
                if($sort == ($address+1)){echo($seed."exe".$lvl."-".$link);};
            };
        }else{
            echo $seed."exe".$lvl."-f";
        };
        
    };
?>