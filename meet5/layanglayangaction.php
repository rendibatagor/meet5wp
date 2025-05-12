<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layang layang</title>
</head>
<body>
    <a href="index.php">home</a>
<?php
$d1 =$_POST['d1'];
$d2 = $_POST['diag2'];
$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];
$luas = 0.5 * $d1 * $d2;
$keliling = 2 * ($sisi1 + $sisi2);
?>
    <h1>layang layang</h1>
    <h4>luas = <?=$luas; ?></h4>
    <h4>keliling = <?=$keliling; ?></h4>
    <img src="layang2.png" alt="" srcset="">
</body>
</html>