<?php
$title = 'home';

ob_start();
?>

<h1>le titre</h1>

<?php
$content = ob_get_clean();
require 'view/BaseView.php'
?>