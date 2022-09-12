<?php
class Games extends Products{
    public $size;

    public function __construct($name, $price, $image, $description, $size){
        parent::__construct($name, $price, $image, $description);
        $this->setSize($size);
    }

    public function getSize(){
        return $this;
    }

    public function setSize($size){
        $this->size = $size;
        return $this;
    }
}