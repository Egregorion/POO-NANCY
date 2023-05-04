<?php 

require_once 'connect.php';
require_once './model/entities/Contact.php';

class ContactManager {
    
    public static function getAllContacts(){
        $pdo = dbconnect();// on se connecte à la base de donnée et on récupère un objet PDO
        $sql = "SELECT * FROM contacts";
        $stmt= $pdo->prepare($sql);// on utilise la methode prepare de l'objet PDO; On récupère un objet PDOStatement
        $stmt->execute();// on exécute le statement 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'Contact'); //on récupère les données sous la forme d'une classe User
        return $results;
    }

    public static function getContactById($id){
        $pdo = dbconnect(); 
        $sql = "SELECT * FROM contacts WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Contact');
        $result = $stmt->fetch();
        return $result;
    } 

    public static function updateContactById(){
        
    }

    public static function deleteContactById(){
        
    }
}