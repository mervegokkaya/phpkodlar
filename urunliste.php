<?php
include("vt_ayar.php");
 
$sorgu=$vt->prepare('SELECT * FROM urunler');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.
 
?>
 
<!doctype html>
<html lang="tr">
  <head>
    
    <meta charset="utf-8">
	<link href="stil.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
 
 
 
 
 
 <body background="restoran.jpg">
 

    <title>Ürün Liste</title>
  </head>
  <body>
	  
	  <div class="container">
	  <div class="row justify-content-center">
		<div class="col">
			 <table class="table table-bordered table-striped table-dark">
			 <tr>
			 
			 
			 <?php
$db=new PDO("mysql:hots=localhost;dbname=restoran;charset=utf8","root","");

     $query= $db->query("select * from urunler");




?>
<table class="table table-bordered table-striped table-dark">
<div id="menu">
<ul>
<li><a>Grafik</a></li>
<li><a>Ürün Ekle</a></li>
</ul>
</div>
</table>

</table>
			 
			 
			 
			 
			 
			 </td></tr>

		 <table class="table table-bordered table-striped table-dark">
			<tr>
			 <td>urun_ad</td>
			 <td>urun_id</td>
			 <td>urun_fiyat</td>
			 <td>urun_adet</td>	
			 </tr>
			 
			 <?php
			 foreach($personelliste as $person){?>
			 
			 	<tr>
			 	<td><?= $person->urun_ad ?></td>
			 	<td><?= $person->urun_id?></td>
			 	<td><?= $person->urun_fiyat?></td>
			 	<td><?= $person->urun_adet ?></td>
				
			 	<td><a href="" class="btn btn-danger">Sil</a></td>
			 	<td><a href="" class="btn btn-primary">Güncelle</a></td>
			    </tr>
				 
			 <?php } ?>
 
			</table>  
		  </div>  
	  </div>
	  </div>
 
 
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crosso