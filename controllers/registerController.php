<?php 

function register(){
    require_once 'Model/Managers/UserManager.php';

    if(isset($_POST) && !empty($_POST)){
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        $nuId = UserManager::insertUser($pseudo, $password);
        var_dump($nuId);
    }

require_once 'Views/registerView.php';
}
