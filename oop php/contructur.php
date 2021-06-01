<?php

class Barang { 
 public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

 public function getLabel(){
     return "$this->judul, $this->penulis, $this->penerbit ,$this->harga";
 }

}

$barang1 = new Barang("naruto","masasi","shonen",30000);
$barang2 = new Barang("popol","kupa","shonen",40000);

echo $barang1.getLabel();
echo"<hr>";
echo $barang2.getLabel();