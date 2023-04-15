<html>
<head>
    <title>
        <?php
            require_once 'connect.php';
            require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';
        ?>
    </title>
</head>
<body>
    <div class="header">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/top.php';
        ?>
    </div>
    <div class="page">
        <div class="sidebar">
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/sidebar.php';
            ?>
        </div>
        <div>
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/content.php';
            ?>
        </div>
    </div>
</body>
</html>


