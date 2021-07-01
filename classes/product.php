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
}