<?php
require_once __DIR__ . '/Products.php';

class Foods extends Products{
    public $animal;
    
    public function __construct($name, $price, $image, $description, $animal){

        parent::__construct($name, $price, $image, $description);
        $this->setAnimal($animal);
    }

    public function getAnimal($animal){
        return $this->animal;
    }
    
    public function setAnimal($animal)
    {
        $this->animal = $animal;
        return $this;
    }
}


?>