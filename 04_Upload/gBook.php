<?php
include __DIR__ . '/funcGb.php';

$str = read();
?>

<?php foreach ($str as $string){ ?>
    <p><?php echo $string; ?></p>
<?}?>

<form action="/funcGb.php" method="post">
    <label for="">
       <input type="text" name="text">
    </label>
    <label for="">
        <input type="submit">
    </label>
</form>
