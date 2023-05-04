<?php 
/* to do : 
- faire la fonction d'édition 
- faire la fonction de suppression 
*/
require_once 'partials/header.php';
?>

<h1><?= htmlspecialchars($contact->getLastname(). ' ' . $contact->getFirstname())?> </h1>
<img src="./uploads/<?= htmlspecialchars($contact->getPicture())?>" alt="<?= htmlspecialchars($contact->getLastname(). ' ' . $contact->getFirstname())?>">
<a href="index.php?action=update&id=<?= htmlspecialchars($contact->getId()) ?>">Mettre à jour</a>
<a href="index.php?action=delete&id=<?= htmlspecialchars($contact->getId()) ?>">Supprimer</a>

<?php
require_once 'partials/footer.php';
?>