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
           $harga,
           $waktu,
           $halaman;
   
       public function __construct($judul, $penulis, $penerbit, $harga,$halaman,$waktu){
           $this->judul = $judul;
           $this->penulis = $penulis;
           $this->penerbit = $penerbit;
           $this->harga = $harga;
           $this->halaman = $halaman;
           $this->waktu = $waktu;
   
       }
    public function getLabel(){
        return " $this->penulis, $this->penerbit ";
    }

    // public function getInfoProduck(){
    //     $str = "{$Barang->judul} | {$Barang->getLabel()}(RP.{$Barang->harga})";
    //     return $str;
    // }
   
   }

class game extends Barang{
    public function getInfoProduck(){
        $str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga}) {$this->waktu} jam";
        return $str;
    
}
}
class komik extends Barang{
    public function getInfoProduck(){
        $str = "{$this->judul} | {$this->getLabel()}(RP.{$this->harga}) {$this->halaman} halaman";
        return $str;
    }
}




class CetakInfo{
    public function cetak(Barang $Barang){
        $str = "{$Barang->judul} | {$Barang->getLabel()}(RP.{$Barang->harga})";
        return $str; 
    } 

}
   
   $barang1 = new komik("naruto","masasi","shonen",30000,100,0);
   $barang2 = new game("popol","kupa","shonen",40000,0,90);
   
   echo $barang1->getInfoProduck();
   echo $barang2->getInfoProduck();
   
   