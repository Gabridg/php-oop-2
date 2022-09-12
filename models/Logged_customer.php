<?php
class Logged_customer extends Customers{
    private $first_name;
    private $last_name;
    private $address;
    private $phone_number;
    private $discount;

    public function __construct($username, $email, $first_name, $last_name, $address, $phone_number, $discount = 20)
    parent::__construct($username, $email);
    
}


?>