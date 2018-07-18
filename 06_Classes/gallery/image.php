<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $photo = $_GET['id'];
} else {
    header('Location: /index.php');
}
?>
<a href="/index.php" style="display:block;">На главную</a>
<img width="600px" src="/gallery/img/<?php echo $photo; ?>" alt="">