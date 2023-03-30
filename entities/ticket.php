<?php
  class Ticket {
    private $number;
    private $price;
    private $payedAt;
    private $startAt;

    public function __construct() {}


    public function setNumber($number) {
      $this->number = $number;
    }

    public function getNumber() {
      return $this->$number;
    }

    public  function setPrice($price) {
      $this->$price = $price;
    }

    public function getPrice() {
      return $this->price;
    }

    public function setStartAt($startAt) {
      $this->startAt = $startAt;
    }

    public function getStartAt() {
      return $this->startAt;
    }

    public function getPayedAt() {
      return $this->payedAt;
    }

    public function buy($payedAt, $pricePayed) {
      if($pricePayed < $this->price || $this->price < $pricePayed) {
        return "Valor incorreto";
      } else {
        $this->payedAt = $payedAt;
        return "Compra realizada com sucesso :D";
      }
    }
  }
?>