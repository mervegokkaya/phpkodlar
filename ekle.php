<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Ürün Ekleme Sayfası</title>
<link href="yonet.css" rel="stylesheet">
<body background="restoran.jpg">
</head>
<body>
<div id="kayit">
<form method="POST" action="eklendi.php">
<h1>Ürün Ekle</h1>
<table>
    <tr>
	    <td>Urun Ad:</td><td> <input type="text" id="urun_ad" name="urun_ad"/></td>
		</tr>
		<tr>
		<td>Urun Fiyat:</td><td> <input type="text" id="urun_fiyat" name="urun_fiyat"/></td>
		</tr>
		<tr>
		<td>Urun Adet:</td><td> <input type="text" id="urun_adet" name="urun_adet"/></td>
		</tr>
		<tr>
		<td></td><td><a href="eklendi.php"><input type="submit" id="button" value="Ekle"/></td>
		</tr>
	</table>
	</form>
	</div>
</body>
</html>
