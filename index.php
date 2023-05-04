<?php 
require_once './controllers/loginController.php';
require_once './controllers/logoutController.php';
require_once './controllers/registerController.php';
require_once './controllers/contactController.php';
require_once './controllers/errorController.php';

if(isset($_GET) && !empty($_GET)){
    if(isset($_GET['action']) && !empty($_GET['action'])){
        $action = $_GET['action'];
        switch($action){
            case 'register':
                register();
                break;
            case 'login':
                login();
                break;
            case 'logout':
                logout();
                break;
            case 'add':
                addContact();
                break;
            case 'show':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    showContact($id);
                }else{
                    error("cet identifiant n'existe pas");
                } 
                break;           
            case 'update':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    updateContact($id);
                }else{
                    error("cet identifiant n'existe pas");
                } 

        }
    }
    //$message = $_GET['message'];
    //echo $message;
}else {
    showContacts();
}