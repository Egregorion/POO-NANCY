<?php 
// le logout d'un site au final c'est juste unset la variable de session
session_start();

function logout(){
    session_unset();
    header('location:index.php?message=Vous avez bien été déconnecté');    
}


