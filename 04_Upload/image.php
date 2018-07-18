<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $photo = $_GET['id'];
} else {
    header('Location: /index.php');
}
?>

<img width="600px" src="/img/<?php echo $photo; ?>" alt="">