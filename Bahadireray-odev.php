<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Bahadır Eray Yaş Grubu Ödevi
	</title>
</head>
<body>

	<?php 
echo "Lütfen mantıklı değerler gir. Dünyaya geldiysen 0'dan küçük olamazsın yada 120 yaşından büyük olamazsın. Dünyanın yaşlı insanı 118 yaşındadır.";
	/* 
	*Bu ödevde belirtilmiş olan değişkene değer girilerek
	*İçindeki bulunan sayısal değerin karşılığı koşullu Döngülerle tespit edilir.
	*Tespit edilen yaş değerine göre hangi kategori olduğu tespit edilir.

	*Araştırmalarım sonucunda İSSET fonksiyonu eğer ifadeye koşul gönderilmediyse
	*Değer almayarak İF dönügüsünü çalıştırmaz.
0-14 ÇOCUK
15-24 Genç
25-64 Yetişkin
65+= Yaşlı
	*/

?>
<br><br> <hr><br><br><br>

<form action="" method="POST">
	<h3>Lütfen Bir yaş giriniz</h3>
	YAŞINIZ <input type="text" name="yas" placeholder="Lütfen Yaşınızı giriniz">
	<input type="submit" name="gonder">
	<hr><br>
</form>

<br><br>

	<?php 
$yas=$_POST['yas'];


if(isset($_POST['yas'])){
	if ($yas>=0 && $yas<=14) {
		echo "Çocuk Kategorisinde bir bireysin";
	} elseif ($yas>=15 && $yas<=34) {
		echo "Genç Kategorisinde bir bireysin";
	} elseif ($yas>=25 && $yas<=64) {
		echo "Yetişkin Kategorisinde bir bireysin";
	} elseif ($yas>=65 && $yas<=120) {
		echo "Yaşlı Kategorisinde bir bireysin";
	} else {
		echo "Lütfen doğru değer girdiğine dikkat et.";
	}
}


?>

<hr><br><br><br>



</body>

</html>