<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jajar genjang</title>
</head>
<body>
    <a href="index.php">home</a>
<?php
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$sisi_miring = $_POST['sisi_miring'];
$luas = $alas * $tinggi;
$keliling = 2 * ($alas + $sisi_miring);
?>
    <h1>jajar genjang</h1>
    <h4>luas = <?=$luas; ?></h4>
    <h4>keliling = <?=$keliling; ?></h4>
    <img src="jajargenjang.jpg" alt="" width="" srcset="">
</body>
</html>