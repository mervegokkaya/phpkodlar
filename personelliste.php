<?php
include("vt_ayar.php");
 
$sorgu=$vt->prepare('SELECT * FROM urunler');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.
 
?>
 
<!doctype html>
<html lang="tr">
  <head>
   <body background="restoran.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <title>Ürün Liste</title>
  </head>
  <body>
	  
	  <div class="container">
	  <div class="row justify-content-center">
		<div class="col">
			 <table class="table table-bordered table-striped table-warning">
			 <tr>
			 <td><a href="grafikler.php" class="btn btn-dark">TOPLAM SATIŞ</a></td>
			 <td><a href="ekle.php" class="btn btn-dark">URUN EKLE</a></td>
			 <td><a href="grafik.php" class="btn btn-dark">STOK KONTROL</a></td>
			 
			 
			 
			 <?php
$db=new PDO("mysql:hots=localhost;dbname=restoran;charset=utf8","root","");

     $query= $db->query("select * from turler");




?>


			 
			 </td></tr>

		 <table class="table table-bordered table-striped table-warning">
			<tr>
			 <td>urun_ad</td>
			 <td>urun_id</td>
			 <td>urun_fiyat</td>
			 <td>urun_adet</td>
			 </tr>
			 
			 <?php
			 foreach($personellist as $person){?>
			 
			 	<tr>
			 	<td><?= $person->urun_ad ?></td>
			 	<td><?= $person->urun_id ?></td>
			 	<td><?= $person->urun_fiyat ?></td>
				<td><?= $person->urun_adet ?> </td>
				
				 
			 <?php } ?>
 
			</table>  
		  </div>  
	  </div>
	  </div>
 
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crosso