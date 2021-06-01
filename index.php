<?php

require_once __DIR__ . '/class.php';
require_once __DIR__ . '/instance.php';

$users = [
    $mario,
    $alessia,
    $antonio,
    $maria
];

foreach($users as $user){
    if($user->getDiscount() > 0){
        var_dump('nome utente: '. $user->name . '<br>');
        var_dump('cognome: '. $user->lastname . '<br>');
        var_dump('email: '. $user->email . '<br>');
        var_dump('sconto: '. $user->getDiscount() . '<br>');
        var_dump('password: '. $user->password . '<br>');
        var_dump('<br>');
    }
    // if($user->getDiscount() = 0){
    //     var_dump('nome utente: '. $user->name . '<br>');
    //     var_dump('cognome: '. $user->lastname . '<br>');
    //     var_dump('email: '. $user->email . '<br>');
    //     var_dump('sconto: '. $user->getDiscount() . '<br>');
    //     var_dump('password: '. $user->password . '<br>');
    //     var_dump('<br>');
    // }
}

?>