<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type"  content="text/html; charset=utf-8">
<title>JavaScript / İcabi Kırgız</title>
</head>

<body>
<?php
	$GelenVeri	= $_GET["deger"];
	if($GelenVeri!=""){
	$VeritabaniBaglantisi	= mysqli_connect("localhost","id15298544_1548621","mgk)9_E&]SEB-\fU","id15298544_15482");
	if(!$VeritabaniBaglantisi){
		die("Veritabanı Bağlantı Hatası");
	}
	mysqli_select_db($VeritabaniBaglantisi,"id15298544_15482");
	mysqli_set_charset($VeritabaniBaglantisi,"utf8");
	
	$KayitSorgula	= mysqli_fetch_assoc(mysqli_query($VeritabaniBaglantisi,"SELECT * FROM kisiler WHERE id=$GelenVeri ORDER BY id ASC LIMIT 1"));
		$isimdegeri			= $KayitSorgula["isim"];
		$soyisimdegeri		= $KayitSorgula["soyisim"];
		$yasdegeri			= $KayitSorgula["yas"];
		$meslekdegeri		= $KayitSorgula["meslek"];
		$sehirdegeri		= $KayitSorgula["sehir"];
	
	echo	"İsim: ".$isimdegeri."<br/>";
	echo	"Soyisim: ".$soyisimdegeri."<br/>";
	echo	"Yas: ".$yasdegeri."<br/>";
	echo	"Meslek: ".$meslekdegeri."<br/>";
	echo	"Sehir: ".$sehirdegeri."<br/>";
	
	mysqli_close($VeritabaniBaglantisi);
	}else{
		echo "Lütfen Geçerli bir Kayıt Seçiniz";
	}
?>
</body>
</html>