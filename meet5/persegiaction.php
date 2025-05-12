<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi</title>
</head>
<body>
<a href="index.php">home</a>
    <?php
    $sisi=$_POST['sisi'];
    $luas=$sisi*$sisi;
    $keliling=4*$sisi;

    ?>
    <h1>persegi</h1>
    <h4>luas = sisi di kali sisi = <?php echo $luas ?></h4>
    <h4>keliling 4 di kali sisi = <?php echo $keliling ?></h4>
    <img src="persegi.png" alt="" width="300" srcset="">
</body>
</html>