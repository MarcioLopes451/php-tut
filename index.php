<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>this is a php document</h1>
    <?php
    $name = 'Marcio';
    $age = 24;
    $num1 = 1;
    $num2 = 2;
    $num3 = $num1 + $num2;
    echo "my name is $name and i am $age years old <br />";
    echo "the sum of $num1 + $num2 is $num3 <br>";
    $arr = [1, 2, 3, 4, 5];
    ?>
    <br>
    <form action="index.php" method="post">
        <label>name: </label><br>
        <input type="text" name="name"><br>
        <label>password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value='log in'>
    </form>
    <?php
    echo $_POST['name'] . "<br>";
    echo $_POST['password'];
    ?>

    <form action="index.php" method="post">
        <br>
        <label>quantity: </label><br>
        <input type="number" name="quantity"><br>
        <input type="submit" value='add'>
    </form>
    <?php
    $item = 'pizza';
    $price = 4.99;
    $quantity = $_POST['quantity'];
    $total = null;
    $total = $quantity * $price;
    echo "you are buying $quantity $item for $price <br>";
    echo 'the total is ' . $total;
    ?>
</body>

</html>