<?php

    namespace App;

    use App\Item;

    class CarrinhoCompraV2 {

        private $items;
   

        public function __construct() {
            $this->items = [];
        }

        public function getItems(){
            return $this->items;
        }

        public function addItems(Item $item){
            array_push($this->items, $item);
            return true;
        }

        public function totalPrice(){
            return array_reduce($this->items, fn($total, $item) => $total + $item->getValor(), 0);
        }

        public function validateCart(){
            return count($this->items) > 0;
        }
    }   