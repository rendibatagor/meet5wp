<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belah ketupat</title>
</head>
<body>
<a href="index.php">home</a>
<?php
$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$sisi = $_POST['sisi'];
$luas = 0.5 * $d1 * $d2;
$keliling = 4 * $sisi;
?>
    <h1> belah ketupat</h1>
    <h4>luas = <?=$luas; ?></h4>
    <h4>keliling = <?=$keliling;  ?></h4>
    <img src="belahketupat.png" alt="" width="300" srcset="">
</body>
</html>