<?php 
class Customers{
    public $username;
    public $email;

    public function __construct($username, $email){
        $this->setUserName($username);
        $this->setEmail($email);
    }


    public function getUserName(){
        return $this->username;
    }

    public function setUserName($username){
        $this->username = $username;
        return $this;

    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;

    }
}


?>