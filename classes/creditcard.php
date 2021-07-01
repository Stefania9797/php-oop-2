<?php
class CreditCard {
    protected $number;
    private $cvc;

    public function __construct(string $number, int $cvc) {
        $this->number = $number;
        $this->cvc = $cvc;
    }
}