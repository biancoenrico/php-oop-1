<?php

class user{

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
$password = user::passwordGen();

// user mario
$mario = new user('mario','rossi',$password);
$mario->email = 'mario@rossi.com';
$mario->discountIf(17);

// user alessia
$alessia = new user('alessia','bianchi',$password);
$alessia->email = 'alessia@bianchi.com';
$alessia->discountIf(68);

// user antonio
$antonio = new user('antonio','romano',$password);
$antonio->email = 'antonio@romano.com';
$antonio->discountIf(35);

// user maria
$maria = new user('maria','gallo',$password);
$maria->email = 'maria@gallo.com';
$maria->discountIf(79);

$users = [
    $mario,
    $alessia,
    $antonio,
    $maria
];

foreach($users as $user){
    var_dump('nome utente: '. $user->name . '<br>');
    var_dump('cognome: '. $user->lastname . '<br>');
    var_dump('email: '. $user->email . '<br>');
    var_dump('sconto: '. $user->getDiscount() . '<br>');
    var_dump('password: '. $user->password . '<br>');
    var_dump('<br>');
}

?>