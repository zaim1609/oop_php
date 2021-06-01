<?php

require_once 'App/init.php';

 $barang1 = new komik("naruto","masasi","shonen",30000,100);
   $barang2 = new game("popol","kupa","shonen",40000,90);
   
   $cetekproduk = new CetakInfo();
   $cetekproduk->tambahProduck( $barang1);
   $cetekproduk->tambahProduck( $barang2);
   echo $cetekproduk->cetak();



   use App\Service\User as ServiceUser;
   use App\produck\User as produckUser;

   new ServiceUser();
   echo"<hr>";
   new produckUser();