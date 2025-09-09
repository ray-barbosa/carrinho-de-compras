<?php
    namespace App;

    class Item{

        private $description;
        private $value;

        public function __construct(){
            $this->description = "";
            $this->value = 0;
        }

        public function getDescription(): string {
            return $this->description;
        }

        public function setDescription(string $description) {
            $this->description = $description;
        }

        public function getValue(): float {
            return $this->value;
        }
        
        public function setValue(float $value) {
            $this->value = $value;
        }

    }