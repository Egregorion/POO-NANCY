<?php 

require_once 'connect.php';
require_once './Model/Entities/User.php';

class UserManager{

    public static function getUsers()
    {
        $pdo = dbconnect();// on se connecte à la base de donnée et on récupère un objet PDO
        $sql = "SELECT * FROM users";
        $stmt= $pdo->prepare($sql);// on utilise la methode prepare de l'objet PDO; On récupère un objet PDOStatement
        $stmt->execute();// on exécute le statement 
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'User'); //on récupère les données sous la forme d'une classe User
        return $results;
    }

    public static function insertUser(String $pseudo, String $password)
    {
        $pdo = dbconnect();
        $sql = "INSERT INTO users (pseudo, password) VALUES (:pseudo, :password)";
        $stmt = $pdo->prepare($sql); 
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $newUser = $pdo->lastInsertId();
        return $newUser;
    }

    public static function connectUser($pseudo, $password)
    {
        $pdo = dbconnect();
        $sql = "SELECT * FROM users WHERE pseudo= :pseudo AND password=:password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('pseudo', $pseudo);
        $stmt->bindParam(':password', $password);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $stmt->fetch();
        return $result;
        /*if($result) {
            $passwordRegistered = $result->getPassword();
            if($passwordRegistered === $password){
                return $result;
            }
        }else{
            return false;
        }*/
    }
}