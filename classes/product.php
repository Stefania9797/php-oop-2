<?php
class Product {
    protected $name;
    protected $desc;
    protected $price;

    public function __construct(string $name, string $desc, string $price) {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
    }
    public function getName()
    {
       return $this->name;
    }
    public function getDesc()
    {
       return $this->desc;
    }
    public function getPrice()
    {
       return $this->price;
    }
}