<?php
$title = 'home';

ob_start();
?>

<h1>la liste des personnages de dragon ball super</h1>

<ul>
    <?php
    for ($i = 0; $i < 10; $i++) {
        ?><li><?=$i?></li><?php
    }
    ?>
</ul>

<?php
$content = ob_get_clean();
require 'view/BaseView.php';
?>