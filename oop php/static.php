<?php

class Contoh{
    public static $angka = 1;

    public static function hitung(){
        
        return "hello" . self::$angka;
    }
}

 echo Contoh::$angka;
 echo"<br>";
 echo Contoh::hitung();









?>