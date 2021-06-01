<?php

// class Caracter{
//     public $nama,$hp,$sterght,$mana;

//     public function pukul(){
//         return "memukul";
//     }

// }

// class mage extends Caracter{
//     public $ulti = false;

//     public function Ulti(){
//         $ulti = true;
//         return "meledak";
//     }
// }

// $carakter1 = new mage();

// echo $carakter1 -> pukul();
// echo "<hr>";
// echo $carakter1 -> Ulti();

?>
<?php

abstract class Barang { 
    private $judul,
           $penulis,
           $penerbit
           ;
    private $diskon;
    private $harga;
   
       public function __construct($judul , $penulis , $penerbit , $harga ){
           $this->judul = $judul;
           $this->penulis = $penulis;
           $this->penerbit = $penerbit;
           $this->harga = $harga;
         
   
       }

       public function setHarga($harga){
        $this->harga = $harga;
    }

      
       public function getHarga(){
           return $this->harga - ($this->harga * $this->diskon/100 );
       }
      
    public function getLabel(){
        return " $this->penulis, $this->penerbit ";
    }

    abstract public function getInfoProduck();
    
    
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga})";
        return $str;
    }

    public function getJudul(){
        return $this->judul;
    }
    public function setJudul($judul){
        if( !is_string($judul)){
            throw new Exception("Judul itu huruf goblok");
        }
        $this->judul = $judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenulis($penulis){
        $this->penerbit = $penulis;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon; 
    }

    public function getDiskon(){
        return $this->diskon;
    }
   











   
   }

class game extends Barang{

    public $waktu;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0",$waktu =0){

        parent :: __construct($judul , $penulis , $penerbit, $harga );
        $this->waktu = $waktu;
    }


    public function getInfoProduck(){
        $str = "Game: " . $this->getInfo()." - {$this->waktu} jam";
        return $str;
    
}
}

class komik extends Barang{
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0",$halaman = "0"){

        parent :: __construct($judul , $penulis , $penerbit , $harga );
        $this->halaman = $halaman;
    }


    public function getInfoProduck(){
        $str = "Game: " . $this->getInfo()." - {$this->halaman} halaman";
        return $str;
}




}



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
   
   $barang1 = new komik("naruto","masasi","shonen",30000,100);
   $barang2 = new game("popol","kupa","shonen",40000,90);
   
   $cetekproduk = new CetakInfo();
   $cetekproduk->tambahProduck( $barang1);
   $cetekproduk->tambahProduck( $barang2);
   echo $cetekproduk->cetak();

   