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
    <?php
        if($_COOKIE['user'] == ''):
    ?>
    <h2> Пройдите авторизацию для покупки билета</h2>
        <?php else:?>
        <p>Yo, <?=$_COOKIE['user']?></p>
            <a href="/exit.php"> Exit</a>
    <?php endif; ?>
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
<?php
if($_COOKIE['admin'] == 1):
    ?>
    <h2> Пройдите авторизацию для покупки билета</h2>
<?php else:?>
    <p>Yo, <?=$_COOKIE['user']?></p>
    <a href="/exit.php"> Exit</a>
<?php endif; ?>


