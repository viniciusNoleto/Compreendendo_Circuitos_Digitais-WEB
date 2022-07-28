
    <head>
        <meta charset="UTF-8">
        <title>CCD - Nível 2</title>

        <link rel="stylesheet" href="../assets/game-style.css">
        <link rel="stylesheet" href="../assets/game-ex2-style.css">
        <link rel="stylesheet" href="../assets/dragNDrop.css">
        
        <?php
            include("fix/links.php");
            include("fix/calc/next-ex-calc.php");
            require_once("fix/calc/pts-ex-calc.php");
        ?>

        <script src="../assets/typeWrite.js" defer></script>
        <script src="../assets/dragNDrop.js" defer></script>

    </head>
    <body>
        <?php
            include("fix/header.php");
        ?>
        <nav class="menu">
            <a href="base?file=materials">MATERIAL</a>
            <a href="../index.php">HOME</a>
            <a href="base?file=quest">JOGAR</a>
        </nav>
        <div class="fill"></div>
        
        <main class="main">
            <?php
                include(__DIR__ . "/../code/{$_GET['_file']}.php");
            ?>
        </main>

        <?php
            include("fix/footer/standard-footer.php");
        ?>
    </body>