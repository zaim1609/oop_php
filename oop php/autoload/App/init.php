<?php


// require_once 'produck/InfoProduk.php';
// require_once 'produck/Barang.php';
// require_once 'produck/komik.php';
// require_once 'produck/game.php';
// require_once 'produck/CetakInfo.php';

spl_autoload_register(function( $class){
    require_once'produck/'.$class.'.php';
});