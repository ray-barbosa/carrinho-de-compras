<?php
    namespace App;

    class CarrinhoCompra {

        private $items;
        private $status;
        private $totalPrice;


        public function __construct() {
            $this->items = [];
            $this->status = 'aberto';
            $this->totalPrice = 0;


        }
        public function showItems(){
            return $this->items;
        }

        public function addItems(string $item, float $valor ){
            array_push($this->items, ["item" => $item,"valor"=> $valor ]);
            $this->totalPrice += $valor;
            return $this;
        }
      
        public function totalPrice(){
            return $this->totalPrice;
        }

        public function showStatus(){
            return $this->status;
        }

        public function finishOrder(){

            if($this->validateCart()){
            $this->status = "Pedido Confirmado!";
            $this->sendConfirmationEmail();
            return true;
            }
        }


        public function sendConfirmationEmail(){
            echo '... envia e-mail de confirmação... <br/>';
        }

        public function validateCart(){
            return count($this->items) > 0;
        }
    }