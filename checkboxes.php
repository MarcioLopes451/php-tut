<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>checkboxes form</h1>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="pizza">
        Pizza<br>
        <input type="checkbox" name="burger" value="burger">
        Burger<br>
        <input type="checkbox" name="hotdog" value="hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="taco">
        Taco<br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['pizza'])) {
        echo 'You like pizza<br>';
    }
    if (isset($_POST['burger'])) {
        echo 'You like burger<br>';
    }
    if (isset($_POST['hotdog'])) {
        echo 'You like hotdog<br>';
    }
    if (isset($_POST['taco'])) {
        echo 'You like taco<br>';
    } else {
        echo 'Please make a selection';
    }
}
?>