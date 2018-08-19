<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/App/View/templates/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/App/View/templates/js/script.js"></script>
    <title>Главная страница</title>
</head>
<body>
<nav>
    <div class="wrapper">
        <div class="menuTuggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <ul class="menu clearfix">
            <li><a href="/index.php">Главная</a></li>
            <li><a href="/App/Controller/gallery.php">Галерея</a></li>
            <li><a href="/App/Controller/schedule.php">Расписание поездов</a></li>
            <li><a href="/App/Controller/admin.php">Админ панель</a></li>
        </ul>
    </div>
</nav>

<div class="about">
    <h1>Санкт-Петербург</h1>
    <p><?php echo $data['aboutSpb'];?></p>
</div>

<div class="footer"></div>
</body>
</html>