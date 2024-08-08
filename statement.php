<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="statement.php" method="post">
        <label for="hours">hours</label>
        <input type="text" name="hours" id="hours">
        <br>
        <label for="pay_per_hour">pay per hour</label>
        <input type="text" name="pay_per_hour" id="pay_per_hour">
        <input type="submit" value="calculate">
    </form>
</body>

</html>
<?php
$hours = $_POST['hours'];
$pay_per_hour = $_POST['pay_per_hour'];
$weekly_pay = null;
$monthly_pay = null;

$weekly_pay = $hours * $pay_per_hour;
$monthly_pay = $weekly_pay * 4;

echo 'total pay is £' . $weekly_pay . ' per week';
echo '<br>';
echo 'total pay is £' . $monthly_pay . ' per month';
?>