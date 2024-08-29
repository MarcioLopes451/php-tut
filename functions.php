<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>functions</h1>

</body>

</html>

<?php
function happy_birthday($name)
{
    echo "happy birthday {$name}";
}
happy_birthday('chop<br>');

function hypotenuse($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo hypotenuse(3, 4)
?>