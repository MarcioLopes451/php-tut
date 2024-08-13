<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Arrays</h1>
</body>

</html>

<?php

$foods = array('apple', 'banana', 'orange', 'grape');
$countries = array('Washington' => 'USA', 'Tokyo' => 'Japan', 'London' => 'UK', 'Paris' => 'France');


$foods[0] = 'pear';

echo $countries['Washington'] . '<br>';

foreach ($countries as $country => $capital) {
    echo $country . ': ' . $capital . '<br>';
}

foreach ($foods as $food) {
    echo $food . '<br>';
}
?>