<?php 

function login() {
    require_once 'Model/Managers/UserManager.php';

    if(isset($_POST) && !empty($_POST)){
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        $user = UserManager::connectUser($pseudo, $password);
        //var_dump($user);
    }
    
    require_once 'Views/loginView.php';
}

