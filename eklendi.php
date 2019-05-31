<?php
$servername="localhost";
$username="root";
$password="";
$dbname="restoran";

$connect= new mysqli ($servername,$username,$password,$dbname);

if($connect->connect_error){
	die ("Bağlantı hatası oluştu");
}
   $urun_ad=$_POST["urun_ad"];
   $urun_fiyat=$_POST["urun_fiyat"]; 
   $urun_adet=$_POST["urun_adet"];
   $ekle ="insert into urunler(urun_ad,urun_id,urun_fiyat,urun_adet) values('$urun_ad',','$urun_fiyat','$urun_adet')";
   
   if($connect->query($ekle)){
	 header("Refresh: 1; urunliste.php");
   }else{
	   "kayıt yapılamadı";
   }
?>