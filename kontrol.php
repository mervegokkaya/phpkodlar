<?php
require("connection.php");
if($_POST){
	if (isset($_POST["eposta"]))
	
	{
$email=strip_tags(trim($_POST["eposta"]));
}
else{
	echo "Eposta requeti olmadı";
}
if(isset($_POST["sifre"]))
{
$password=strip_tags(trim($_POST["sifre"]));
}
else{
	
echo "Şifre requesti olmadı";
}


if($baglan){
	echo "veritabanına baglandı";
$sorgu=mysqli_query($baglan,"SELECT eposta,sifre FROM kullanici WHERE eposta='".$email."' AND sifre='".$password."'");
if(mysqli_num_rows($sorgu)>0){
	
	header("Location:personelliste.php");
	
}else{
	echo "Şşifre yanlış";
}
}else{
die( "VEritabanına baglanamadı");
}
}
else{
	echo "Sayfaya baglanamdı";

}



?>