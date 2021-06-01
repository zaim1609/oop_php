<?php

class Barang { 
 public $judul = "judul",
        $penulis = "oda",
        $penerbit = "lol",
        $harga = "0";

 public function getLabel(){
     return "$this->judul, $this->penulis, $this->penerbit ,$this->harga";
 }







}

// $barang1 = new Barang();
// $barang1 ->judul ="naruto";

// var_dump($barang1);

$barang3 = new Barang();
$barang3->judul = "redo";
$barang3->penulis = "popop";
$barang3->penerbit = "gramedia";
$barang3->harga = "20000";


$barang4 = new Barang();
$barang4->judul = "naruto";
$barang4->penulis = "masasi";
$barang4->penerbit = "gramedia";
$barang4->harga = "90000";


echo "komik: ". $barang3->getLabel();
echo"<hr>";
echo "komik: ".$barang4->getLabel();



















?>
























