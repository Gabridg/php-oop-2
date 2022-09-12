<?php
class Kennels extends Products{
    public $size;
    public $weight;

    public function __construct($name, $price, $image, $description, $size, $weight){
        parent::__construct($name, $price, $image, $description);
        $this->setSize($size);
        $this->setWeight($weight);
    }

    public function getSize(){
        return $this;
    }

    public function setSize($size){
        $this->size = $size;
        return $this;
    }
    public function getWeight(){
        return $this;
    }

    public function setWeight($weight){
        $this->weight = $weight;
        return $this;
    }
}

?>