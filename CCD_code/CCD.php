<!DOCTYPE html>
<html lang="pt-br">

    <?php
        session_start();
        require_once "db-conect.php"; $db = connect_db(); 
        include(__DIR__."/base/{$_GET['file']}.php");
    ?>

</html>