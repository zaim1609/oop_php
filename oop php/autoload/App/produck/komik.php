
<?php
class komik extends Barang implements infoProduk{
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0",$halaman = "0"){

        parent :: __construct($judul , $penulis , $penerbit , $harga );
        $this->halaman = $halaman;
    }


    public function getInfoProduck(){
        $str = "Komik: " . $this->getInfo()." - {$this->halaman} halaman";
        return $str;
}

public function getInfo() {
    $str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga})";
    return $str;
}




}