<?php 
require 'partials/header.php';
?>

<?php foreach($contacts as $contact){ ?>
    <a href="index.php?action=show&id=<?= $contact->getId()?>">
        <article>
            <img src="./uploads/<?=$contact->getPicture()?>" alt="<?= $contact->getLastname() ?>">
            <h2><?= $contact->getFirstname() . ' ' . $contact->getLastname() ?></h2>
            <p><?= $contact->getEmail() ?></p>
        </article>
    </a>
<?php } ?>

<?php
require 'partials/footer.php';
?>
    
