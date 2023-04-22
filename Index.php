<html>
<head>
    <title>
        <?php
            require_once 'connect.php';
            require_once 'head.php';
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <?php
        require_once 'top.php';
        ?>
    </div>
    <div class="page">
        <div class="sidebar">
            <?php
            require_once 'sidebar.php';
            ?>
        </div>
        <div>
            <?php
            require_once 'content.php';
            ?>
        </div>
    </div>
    <div>
        <div class="carousel">
            <div tabindex="0" class="carousel--item one"></div>
            <div tabindex="0" class="carousel--item two"></div>
            <div tabindex="0" class="carousel--item three"></div>
        </div>
    </div>
    <div class="footer" >
        <?php
        require_once 'footer.php';
        ?>
    </div>
</body>
</html>


