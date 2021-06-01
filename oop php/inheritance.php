<?php

class Barang { 
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;
   
       public function __construct($judul, $penulis, $penerbit, $harga){
           $this->judul = $judul;
           $this->penulis = $penulis;
           $this->penerbit = $penerbit;
           $this->harga = $harga;
   
       }
    public function getLabel(){
        return " $this->penulis, $this->penerbit ";
    }
   
   }

class CetakInfo{
    public function cetak(Barang $Barang){
        $str = "{$Barang->judul} | {$Barang->getLabel()}(RP.{$Barang->harga})";
        return $str; 
    } 

}
   
   $barang1 = new Barang("naruto","masasi","shonen",30000);
   $barang2 = new Barang("popol","kupa","shonen",40000);
   
   
   