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
<div class="panel-reg">
    <div style="border-right-width: 1px; border-right-style: solid; padding: 30px">
        <p>Дорогие наши пользователи!

            Спасибо, что выбрали наше турагентство Airplane73! Мы ценим каждого нашего клиента и стараемся сделать все возможное, чтобы ваше путешествие было приятным и незабываемым!

            Чтобы иметь возможность воспользоваться всеми преимуществами нашего сайта, мы призываем вас зарегистрироваться или войти в свой аккаунт! Это всего лишь займет несколько минут, но вы получите доступ к персонализированной информации, сможете сохранять историю своих путешествий, получить скидки и бонусы, а также множество других преимуществ.

            Поэтому не откладывайте на завтра то, что можно сделать сегодня! Зарегистрируйтесь или войдите в свой аккаунт и продолжайте наслаждаться планированием своих увлекательных путешествий вместе с Airplane73!</p>
    </div>
    <div style="padding: 30px; display: flex; flex-direction: column">
        <div class="container">
            <h1>Войти</h1>
            <form action="auth.php" method="post">
                <input type="text" class="" name="login" id="login" placeholder="Login here"><br>
                <input type="password" class="" name="pass" id="pass" placeholder="Pass here"><br>
                <button class="glow-on-hover" type="submit">Login</button>
            </form>
        </div>
        <div class="container">
            <h1>Зарегистрироваться</h1>
            <form action="check.php" method="post">
                <input type="text" class="" name="login" id="login" placeholder="Login here"><br>
                <input type="text" class="" name="name" id="name" placeholder="Name here"><br>
                <input type="text" class="" name="surname" id="surname" placeholder="Surname here"><br>
                <input type="text" class="" name="country" id="country" placeholder="Country here"><br>
                <input type="password" class="" name="pass" id="pass" placeholder="Pass here"><br>
                <button class="glow-on-hover" type="submit">Register</button>
            </form>
        </div>
    </div>
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