<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi panjang</title>
</head>
<body>
<a href="index.php">home</a>
    <?php 
    $panjang=19;
    $lebar=10;
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);
    ?>
    <h1>persegi panjang</h1>
    <h4>luas = panjang kali lebar = <?php echo $luas; ?></h4>
    <h4>keliling 2 di kali (panjang+lebar) = <?php echo $keliling; ?></h4>
    <img src="persegipanjang.png" alt="" width="300" srcset="">
</body>
</html>