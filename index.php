<?php 
require_once './controllers/loginController.php';
require_once './controllers/logoutController.php';
require_once './controllers/registerController.php';
require_once './controllers/contactController.php';

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
            case 'show':
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
                    showContact($id);
                }
            default:
                
                break;
        }
    }
    //$message = $_GET['message'];
    //echo $message;
}else {
    showContacts();
}