<?php
class game extends Barang implements InfoProduk{

public $waktu;

public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0",$waktu =0){

    parent :: __construct($judul , $penulis , $penerbit, $harga );
    $this->waktu = $waktu;
}


public function getInfoProduck(){
    $str = "Game: " . $this->getInfo()." - {$this->waktu} jam";
    return $str;

}


public function getInfo() {
$str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga})";
return $str;
}
}