<?php 

class User {
    private Int $id;

    private String $pseudo;

    private String $password;
/*
    public function __construct(String $pseudo, String $password)
    {
        $this->pseudo = $pseudo;
        $this->password = $password;
    }
*/
    public function getId():Int
    {
        return $this->id;
    }

    public function getPseudo():String
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPassword():String
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}