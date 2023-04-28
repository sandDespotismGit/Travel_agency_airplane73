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
<div>
    <div class="gallery"  style="border-bottom-style: solid; border-bottom-width: 1px">
        <div class="pic-ctn">
            <img src="https://thailand-good.ru/wp-content/uploads/c/1/b/c1b8b994423ec37c3446a2eb3d1ac6cb.jpeg" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=2" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=3" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=4" alt="" class="pic">
            <img src="https://picsum.photos/200/300?t=5" alt="" class="pic">
        </div>
    </div>
    <div class="gallery" style="border-bottom-style: solid; border-bottom-width: 1px">
        <p>Представляете себе, что у вас есть возможность совершить путешествие вашей мечты, с максимальным комфортом и минимумом забот? Тогда вам просто необходимо обратиться в турагенство Airplane73 - чудесный мир путешествий!

            Мы предлагаем безупречный сервис и наша цель - удовлетворить вас с первого же момента общения. Наш опытный персонал поможет вам выбрать путешествие, которое станет самым незабываемым в вашей жизни!

            Мы работаем эксклюзивно со многими авиалиниями, что позволяет нам подобрать оптимальный маршрут и улучшить условия полета, исходя из ваших потребностей. А также у нас есть потрясающие предложения и специальные акции для наших клиентов!

            Не откладывайте свои мечты на потом - отправляйтесь в путешествие с Airplane73 уже сегодня и позвольте нам сделать ваше путешествие незабываемым и необыкновенным!</p>
    </div>
    <div class="gallery">
        <div class="pic-ctn">
            <img src="https://naked-science.ru/wp-content/uploads/2023/01/b04ba39ce0948aab2da81f7348a27f5e-scaled.jpeg" alt="" class="pic">
            <img src="https://funart.pro/uploads/posts/2021-04/1618776725_39-funart_pro-p-puteshestvie-v-avstraliyu-krasivie-mesta-f-44.jpg" alt="" class="pic">
            <img src="https://travelinlife.ru/uploads/666/813b41e7e860618fdf4fce4fc6640e03.jpg" alt="" class="pic">
            <img src="https://sportishka.com/uploads/posts/2022-11/1667485662_41-sportishka-com-p-vidi-puteshestvii-pinterest-42.jpg" alt="" class="pic">
            <img src="" alt="" class="pic">
        </div>
    </div>
</div>
<div class="panel">
    <form action="Index.php" >
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