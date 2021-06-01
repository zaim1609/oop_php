<?php
class CetakInfo{

public $daftarProduck = [];

public function tambahProduck( Barang $barang){
    $this -> daftarProduck[] = $barang;
}

public function cetak(){
    $str = " DAFTAR PRODUk:  <br>";

    foreach ($this->daftarProduck as $p) {
        $str .= "-{$p->getInfoProduck()}<br>";
    }
    return $str;
} 

}