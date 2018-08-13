<?php
include __DIR__ . '/funcGb.php';

$strings = read();
?>

<?php foreach ($strings as $string){ ?>
    <p><?php echo $string; ?></p>
<?}?>

<form action="/gBookRecord.php" method="post">
    <label for="">
       <input type="text" name="text">
    </label>
    <label for="">
        <input type="submit">
    </label>
</form>
