<?php
$title = 'home';

ob_start();

?>

<h1>la liste des personnages de dragon ball super</h1>

<ul>
    <?php
        foreach($data['items'] as $characters){
            ?>
            <span>
                <li><?= $characters['name']?></li>
                <li><img src="<?= $characters['image']?>" alt="<?= $characters['name']?>"></li>
                <li><?= $characters['ki'] ?></li>
                <a href="index.php/?page=download&id=<?= $characters['id'] ?>&name=<?= $characters['name'] ?>
                &ki=<?= $characters['ki'] ?>&maxKi=<?= $characters['maxKi'] ?>&race=<?= $characters['race'] ?>
                &gender=<?= $characters['gender'] ?>&description=<?= $characters['description'] ?>
                &affiliation=<?= $characters['affiliation'] ?>">all information</a>
            </span>            
            <?php
        }
    ?>
</ul>

<?php
$content = ob_get_clean();
require 'view/BaseView.php';
?>