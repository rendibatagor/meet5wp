<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lingkaran</title>
</head>
<body>
    <a href="index.php">home</a>
<?php
$jari =$_POST['jari'];
$phi = 3.14;
$luas = $phi * $jari * $jari;
$keliling = 2 * $phi * $jari;
?>
    <h1>lingkaran</h1>
    <h4>luas =<?= $luas;?></h4>
    <h4>keliling = <?= $keliling; ?></h4>
    <img src="lingkaran.png" alt="" width="" srcset="">
</body>
</html>