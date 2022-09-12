<?php
class Logged_customer extends Customers{
    private $first_name;
    private $last_name;
    private $address;
    private $phone_number;
    private $discount;

    public function __construct($username, $email, $first_name, $last_name, $address, $phone_number, $discount){
        parent::__construct($username, $email);
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAddress($address);
        $this->setPhoneNumber($phone_number);
        $this->setDiscount($discount);
    }

    public function getFirstName(){
        return $first_name;
    }

    public function setFirstName($size){
        $this->size = $first_name;
        return $this;
    }
     public function getLastName(){
        return $this;
    }

    public function setLastName($last_name){
        $this->last_name = $last_name;
        return $this;
    }
    public function getAddress(){
        return $this;
    }

    public function setAddress($address){
        $this->address = $address;
        return $this;
    }
    public function getPhoneNumber(){
        return $this;
    }

    public function setPhoneNumber($phone_number){
        $this->phone_number = $phone_number;
        return $this;
    }
    public function getDiscount($perc){
        return 20;
    }    
}


?>