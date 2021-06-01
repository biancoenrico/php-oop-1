<?php

    // user mario
    $mario = new User('mario','rossi',$password);
    $mario->email = 'mario@rossi.com';
    $mario->discountIf(17);

    // user alessia
    $alessia = new User('alessia','bianchi',$password);
    $alessia->email = 'alessia@bianchi.com';
    $alessia->discountIf(68);

    // user antonio
    $antonio = new User('antonio','romano',$password);
    $antonio->email = 'antonio@romano.com';
    $antonio->discountIf(35);

    // user maria
    $maria = new User('maria','gallo',$password);
    $maria->email = 'maria@gallo.com';
    $maria->discountIf(79);

?>