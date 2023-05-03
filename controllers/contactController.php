<?php 

function addContact() {
    require './views/newcontactView.php';

    if(!empty($_FILES)){
        $upload_dir = './uploads';
        if($_FILES['picture']['error'] == 0){
            $currentLocation = $_FILES['picture']['tmp_name'];
            $name = $_FILES['picture']['name'];
            $uploadLocation = "$upload_dir/$name";
            move_uploaded_file($currentLocation, $uploadLocation);
        }
    }

}