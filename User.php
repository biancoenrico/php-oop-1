<?php
    class User{

        public $name;
        public $lastname;
        public $email;
        public $password;
        public $discount;

        public function __construct($name,$lastname,$password){

            $this-> name = $name;
            $this-> lastname = $lastname;
            $this-> password = $password;

        }
        public function discountIf($age){
            if($age > 50){
                $this->$discount = 47;
                
            }else{
                $this->$discount = 0;
            }
        }
        public function getDiscount(){
            return $this->$discount;
        }
        public static function passwordGen(){
            return '0000';
        }
    }
    
    $password = User::passwordGen();
?>