<?php

    function connect_db($db = 'devweb_db'){
        $server = 'localhost';
        $user = 'root';
        $password = '';

        $connect = new mysqli($server,$user,$password,$db);

        if($connect->connect_error){
            die('Deu ruim');
        }

        return $connect;
    }
    
?>