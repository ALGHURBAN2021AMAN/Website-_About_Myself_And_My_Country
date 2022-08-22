
<?php
$kullanici_adi = $_POST['kullanici'];
$parola = $_POST['parola'];
$sonuc = @mysql_query("SELECT * FROM kullanicilar WHERE kullanici = ‘" . $kullanici_adi .

$pasword = 'b191200557';
echo sha1($password); // 10470c3b4b1fed12c3baac014be15fac67c6e815 gibi bir çıktısı olacaktır.
    "‘ AND parola = ‘" . $parola . "‘ LIMIT 1");
if (@mysql_num_rows($sonuc) > 0)
    echo 'Sistemime hoş geldin';
else
    echo 'Hatalı kullanıcı adı ya da parola';
?>
<?php
$kullaniciadi = substr($kullaniciadi,0,32);
?>





