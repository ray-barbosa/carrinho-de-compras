<?php
    namespace App;

    class Pedido{

        private $status;
        private $shoppingCart;
        private $totalPrice;

        public function __construct() {
            $this->status = 'aberto';
            $this->totalPrice = 0;
            $this->shoppingCart = new CarrinhoCompraV2();
        }

        public function getShoppingCart() {
            return $this->shoppingCart;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function orderFinished(){
            $this->shoppingCart->validateCart() ? $this->setStatus('Pedido Confirmado!') : false;
        }









        



    }