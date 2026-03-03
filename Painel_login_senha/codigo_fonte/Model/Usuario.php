<?php
class Usuario{
    private String $name;
    private String $password;
    private String $email;
    private  $date;

    public function setName($name){
        $this -> name = $name;


    }
     public function getName(){
        return $this -> name;

    }

    public function setPassword($password){
        $this -> password = $password;
    }

    public function getPassword(){
        return $this -> password;


    }
    public function setEmail($email){
        $this -> email = $email;
    }

    public function getEmail(){
        return $this -> email;

    }

    public function setDate($date){
        $this -> date = $date;
    }

    public function getDate(){
        return $this -> date;

    }
}
?>
