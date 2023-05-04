<?php 
require_once './model/managers/ContactManager.php';

function showContacts() {
    $contacts = ContactManager::getAllContacts();
    require_once './views/indexView.php';
}

function showContact($id) {
    $contact = ContactManager::getContactById($id);
    if($contact){
        require_once './views/contactView.php';
    }else{
        //rediriger vers une page d'erreur
    }
    
}

function addContact() {

    if(!empty($_FILES)){
        $upload_dir = './uploads';
        if($_FILES['picture']['error'] == 0){
            $currentLocation = $_FILES['picture']['tmp_name'];
            $name = $_FILES['picture']['name'];
            $uploadLocation = "$upload_dir/$name";
            move_uploaded_file($currentLocation, $uploadLocation);
        }
    }

    require_once './views/newcontactView.php';
}

function updateContact($id) {
    $contact = ContactManager::getContactById($id);
    if($contact){
        require_once './views/editcontactView.php';
    }else{
        //rediriger vers une page d'erreur
    }
}

function deleteContact($id) {
    $contact = ContactManager::getContactById($id);
    if($contact){
        ContactManager::deleteContactById($id);
    }else{
        //rediriger vers une page d'erreur
    }
}