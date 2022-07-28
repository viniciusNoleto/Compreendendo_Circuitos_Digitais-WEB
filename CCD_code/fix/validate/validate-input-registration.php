<?php

    function validate_one_input($post_data, $one_input){
        if(count($post_data) > 0){
            if($one_input == 'name'){
                if(trim($post_data['name']) === ""){
                    echo "O campo nome é obrigatorio";
                };
            }
    
            if(!filter_var($post_data['email'], FILTER_VALIDATE_EMAIL) && $one_input == 'email'){
                echo "O campo email é obrigatorio e deve estar na formatação correta";
            };

            if(trim($post_data['password']) === "" && $one_input == 'password'){
                echo "O campo senha é obrigatorio";
            };
    
            if(isset($post_data['born']) && $one_input == 'born'){
                $dtF = DateTime::createFromFormat('Y-m-d', $post_data['born']);
                $dtV = explode("-",$post_data['born']);
                $live_date = explode("/",date("Y/m/d"));
                if(!$dtF || $dtV[0]<($live_date[0]-120) || $dtV[0]>$live_date[0]
                || ($dtV[0]==$live_date[0] && $dtV[1]>$live_date[1]) || ($dtV[0]==$live_date[0] 
                && $dtV[1]==$live_date[1] && $dtV[2]>=$live_date[2])){
                    echo "O campo data deve estar na formatação correta";
                };
            };
        };
    };
    
?>