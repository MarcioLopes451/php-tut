<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <label for="radius">radius</label>
        <input type="text" name="radius" id="radius">
        <input type="submit" value="calculate">
    </form>
</body>

</html>
<?php
$radius = $_POST['radius'];
$circumference = null;
$area = null;
$volume = null;
$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = pi() * $radius * $radius;
$area = round($area, 2);

$volume = pi() * $radius * $radius * $radius;
$volume = round($volume, 2);

echo 'circumference is ' . $circumference . ' cm';
echo '<br>';
echo 'area is ' . $area . ' cm^2';
echo '<br>';
echo 'volume is ' . $volume . ' cm^3';
