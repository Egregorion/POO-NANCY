<?php 
require_once 'partials/header.php';
?>

<h1>Ajouter un contact</h1>

<form action="" method="post" enctype="multipart/form-data">
    <div>
        <label for="lastname">Lastname</label>
        <input id="lastname" type="text" name="lastname" value="<?= $contact->getLastname() ?>">
    </div>
    <div>
        <label for="firstname">Firstname</label>
        <input id="firstname" type="text" name="firstname" value="<?= $contact->getFirstname() ?>">
    </div>
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="<?= $contact->getEmail() ?>">
    </div>
    <div>
        <label for="picture">Picture</label>
        <input type="file" id="picture" name="picture">
    </div>
    <input type="submit" value="envoyer">
</form>

<?php
require_once 'partials/footer.php';
?>