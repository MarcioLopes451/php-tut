<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>radio forms</h1>
    <form action="radio.php" method="post">
        <input type="radio" value="visa" name="credit_card">
        Visa<br>
        <input type="radio" value="mastercard" name="credit_card">
        mastercard<br>
        <input type="radio" value="AMEX" name="credit_card">
        AMEX<br>
        <input type="submit" name="confirm" value="confirm" />
    </form>
</body>

</html>

<?php
if (isset($_POST['confirm'])) {
    if (isset($_POST['credit_card'])) {
        $credit_card = $_POST['credit_card'];
    }

    switch ($credit_card) {
        case 'visa':
            echo 'You selected Visa.';
            break;
        case 'mastercard':
            echo 'You selected Mastercard.';
            break;
        case 'AMEX':
            echo 'You selected AMEX.';
            break;
        default:
            echo 'Please make a selection.';
            break;
    }
}



?>