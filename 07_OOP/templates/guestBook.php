<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="/index.php">Главная</a>

<h1>Гостевая книга</h1>

<?php foreach ($data['gBook'] as $line) {?>
    <p><?php echo $line->getMessage(); ?></p>
<?php }?>

<form action="/guestBook.php" method="post">
    <label for="">
        <input type="text" name="text">
    </label>
    <label for="">
        <input type="submit">
    </label>
</form>

</body>
</html>