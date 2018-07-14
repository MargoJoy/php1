<?php
include __DIR__ . '/gbookUpload.php';

?>
<h3>Гостевая книга</h3>

<?php foreach ($guestbook->getData() as $line){ ?>
    <p><?php echo $line; ?></p>
<?php } ?>

<form action="/gbook/guestbook.php" method="post">
    <label for="">
        <input type="text" name="text">
    </label>
    <label for="">
        <input type="submit">
    </label>
</form>

<a href="/index.php">На главную</a>
