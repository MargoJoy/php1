<?php
require __DIR__ . '/classes/GuestBook.php';

$gb = new GuestBook();

//var_dump($records); die;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php foreach ($gb->getRecor() as $record) {?>
    <p><?php echo $record->getMessage();?></p>
    <hr>
<?php }?>

</body>
</html>
