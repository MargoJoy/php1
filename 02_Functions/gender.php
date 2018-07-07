<?php
include __DIR__ . '/functions.php';
?>


<h3>Пункт 4. Определение пола по имени человека </h3>
<p><?php echo $name = 'Александра'; ?></p>
<p><?php echo gender($name); ?></p>
