<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segitiga</title>
</head>
<body>
<a href="index.php">home</a>
    <?php 
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisi1=$_POST['sisi1'];
    $sisi2=$_POST['sisi2'];
    $sisi3=$_POST['sisi3'];
    $luas = 0.5 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3;
    ?>

    <h1>segitiga</h1>
    <h4>luas = <?=$luas; ?></h4>
    <h4>keliling =<?=$keliling; ?> </h4>
    <img src="segitiga.png" alt="" width="300" srcset="">
</body>
</html>