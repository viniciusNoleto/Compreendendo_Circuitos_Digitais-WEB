
    <head>
        <meta charset="UTF-8">
        <title>CCD - Account</title>
        <?php
            require_once "db-conect.php"; $db = connect_db(); 
            require("fix/validate/validate-input-registration.php");
            include("fix/links.php");
        ?>
        <link rel="stylesheet" href="../assets/login-style.css">
    </head>
    <body>
        <?php
            include("fix/header.php");
        ?>
        <nav class="menu">
            <a href="../index.php">HOME</a>
        </nav>
        <div class="fill"></div>

        <?php
            include(__DIR__ . "/../code/{$_GET['_file']}.php");
            include("fix/footer/standard-footer.php");
        ?>
    </body>