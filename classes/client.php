<?php
class Client extends User {
    //set carta di credito
    protected $creditCards = [];
    public function addCreditCard($creditCard) {
        $this->creditCards = $creditCard;
    }
    //get carta di credito
    public function getCreditCard() {
        return $this->creditCards;
    }
}