<?php 

if(isset($_GET) && !empty($_GET)){
    $message = $_GET['message'];
    echo $message;
}