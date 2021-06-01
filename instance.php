<?php

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

?>