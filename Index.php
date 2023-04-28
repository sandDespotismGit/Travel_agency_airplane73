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
    <?php
    if( $_COOKIE['IsAdmin'] == 1):
        ?>
        <div class="panel">
            <form >
                <button class="glow-on-hover">Добавить текст</button>
            </form>
            <form >
                <button class="glow-on-hover">Проверить соединение</button>
            </form>
            <form >
                <button class="glow-on-hover">Редактировать текст</button>
            </form>
        </div>
    <?php else:?>

    <?php endif; ?>
    <div class="page">
        <div class="content">
            <?php
            require_once 'content.php';
            ?>
        </div>
    </div>
    <div>
        <?php
        if(! isset($_COOKIE['Name'])):
            ?>
            <h2> Пройдите авторизацию для покупки билета</h2>
        <?php else:?>
            <p>Yo, <?=$_COOKIE['Name']?></p>
            <a href="exit.php"> Exit</a>
        <?php endif; ?>
    </div>

    <div class="panel">
        <form action="Index.php">
            <button class="glow-on-hover">Главная</button>
        </form>
        <form action="carousel.php">
            <button class="glow-on-hover">Галерея</button>
        </form>
        <form action="accaunt.php">
            <button class="glow-on-hover">Аккаунт</button>
        </form>
    </div>
    <div class="footer" >
        <?php
        require_once 'footer.php';
        ?>
    </div>
</body>
</html>


