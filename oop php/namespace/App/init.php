<?php


// require_once 'produck/InfoProduk.php';
// require_once 'produck/Barang.php';
// require_once 'produck/komik.php';
// require_once 'produck/game.php';
// require_once 'produck/CetakInfo.php';
// require_once 'produck/User.php';

// require_once 'Service/User.php';

spl_autoload_register(function( $class){
    $class = explode('\\',$class);
    $class = end($class);
    require_once 'produck/'.$class.'.php';
});
spl_autoload_register(function( $class){
    $class = explode('\\',$class);
    $class = end($class);
    require_once 'Service/'.$class.'.php';
});