<?php 
require 'partials/header.php';
?>

<form action="" method="post">
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <input type="submit" value="envoyer">
</form>


<?php
require 'partials/footer.php';
?>
    