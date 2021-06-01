

<?php
abstract class Barang { 
    protected $judul,
           $penulis,
           $penerbit,
           
     $diskon,
     $harga;
   
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

    
    
    
    abstract  public function getInfo();
   

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