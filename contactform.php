<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    if (empty($name)) {
        echo 'name is missing';
    } elseif (empty($email)) {
        echo 'email is missing';
    } elseif (empty($number)) {
        echo 'phone number is missing';
    } elseif (empty($message)) {
        echo 'Please write a message';
    } else {

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['number'] = $number;
        $_SESSION['message'] = $message;
        $_SESSION['messageSent'] = true;
    }

    if (isset($_POST['contact'])) {
        session_destroy();
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['messageSent']) && isset($_SESSION['messageSent']) === true): ?>
        <h1>Contact Form php</h1>
        <p>Message Sent ! you will receive a message back soon.</p>
        <p><?php echo $_SESSION['name'] ?></p>
        <p><?php echo $_SESSION['email'] ?></p>
        <p><?php echo $_SESSION['number'] ?></p>
        <p><?php echo $_SESSION['message'] ?></p>
        <form action="contactform.php" method="post">
            <input type="submit" name="contact" value="contact" />
        </form>
    <?php else: ?>
        <h1>Contact Form php</h1>
        <form action='contactform.php' method="post">
            <label>name</label>
            <input type="text" name="name" />
            <br>
            <label>email</label>
            <input type="text" name="email" />
            <br>
            <label>number</label>
            <input type="text" name="number" />
            <br>
            <label>message</label>
            <input type="text" name="message" />
            <br>
            <input type="submit" value="submit" name="submit" />
        </form>
    <?php endif; ?>
</body>

</html>