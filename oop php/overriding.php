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

class Barang { 
    public $judul,
           $penulis,
           $penerbit,
           $harga
           ;
   
       public function __construct($judul , $penulis , $penerbit , $harga ){
           $this->judul = $judul;
           $this->penulis = $penulis;
           $this->penerbit = $penerbit;
           $this->harga = $harga;
         
   
       }
    public function getLabel(){
        return " $this->penulis, $this->penerbit ";
    }

    public function getInfoProduck(){
        $str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga})";
        return $str;
    }
   
   }

class game extends Barang{

    public $waktu;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "0",$waktu =0){

        parent :: __construct($judul , $penulis , $penerbit, $harga );
        $this->waktu = $waktu;
    }


    public function getInfoProduck(){
        $str = "Game: " . parent::getInfoProduck()." - {$this->waktu} jam";
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
        $str = "Game: " . parent::getInfoProduck()." - {$this->halaman} halaman";
        return $str;
}
}



class CetakInfo{

    public function cetak(Barang $Barang){
        $str = "{$Barang->judul} | {$Barang->getLabel()}(RP.{$Barang->harga})";
        return $str; 
    } 

}
   
   $barang1 = new komik("naruto","masasi","shonen",30000,100);
   $barang2 = new game("popol","kupa","shonen",40000,90);
   
   echo $barang1->getInfoProduck();
   echo "<hr>";
   echo $barang2->getInfoProduck();
   
   