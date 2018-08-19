<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/App/View/templates/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic,latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/App/View/templates/js/script.js"></script>
    <title>Админ панель</title>
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

<div class="wrapper">
    <div class="adminAbout">
        <h1>Описание</h1>
        <p><?php echo $data['aboutSpb'];?></p>
        <div class="form">
            <p>Редактировать описание</p>
            <form action="/App/Record/changeCity.php" method="post">
                <label for="">
                    <textarea name="changeCity"></textarea>
                </label>
                <br>
                <input type="submit">
            </form>
        </div>
    </div>

    <div class="adminGallery">
        <h1>Галлерея</h1>
        <div class="previewGallery">
            <?php foreach ($data['allImages'] as $image){?>
                <img src="/App/data/img/<?php echo $image->name; ?>" alt="<?php echo $image->description; ?>">
            <?php }?>
        </div>
        <div class="form">
            <p>Добавить изображение</p>
            <form action="/App/Record/uploadImage.php" method="post" enctype="multipart/form-data" >
                <label for="">
                    <input type="text" name="description" placeholder="Описание">
                </label>
                <div class="file-upload">
                    <label>
                        <input type="file" name="newImg">
                        <span>Выбрать файл</span>
                    </label>
                </div>
                <input type="hidden" id="filename" class="filename">

                <input type="submit" value=Загрузить>
            </form>
        </div>
    </div>

    <div class="adminSchedule">
        <h1>Расписание поездов</h1>
        <table >
            <tr class="title">
                <td>Редактировать</td>
                <td>Город отправления</td>
                <td>Дата и время отправления</td>
                <td>Город прибытия</td>
                <td>Дата и время прибытия</td>
            </tr>
            <?php foreach ($data['schedule'] as $line) { ?>
                <tr>
                    <td><a href="/App/Record/scheduleUpdate.php?id=<?php  echo $line->id; ?>">Изменить</a></td>
                    <td><?php echo $line->departure; ?></td>
                    <td><?php echo $line->dep_time; ?></td>
                    <td><?php echo $line->arival; ?></td>
                    <td><?php echo $line->ariv_time; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<div class="footer"></div>
</body>
</html>