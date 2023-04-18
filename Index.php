<html>
<head>
    <title>
        <?php
            require_once 'connect.php';
            require_once 'head.php';
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
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
</body>
</html>


