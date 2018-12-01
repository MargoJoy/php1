<?php
include __DIR__ . '/../classes/GuestBook.php';
$guestbook = new GuestBook(__DIR__ . '/text.txt');

?>
<a href="/index.php">На глаавную</a>

<?php foreach ($guestbook->getData() as $line){?>
    <p><?php echo $line; ?></p>
<?php } ?>

<form action="/gbook/gbookUploader.php" method="post">
    <label for="">
        <input type="text" name="text">
    </label>
    <input type="submit">
</form>
