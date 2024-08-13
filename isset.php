<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            echo 'Username is missing.';
        } elseif (empty($password)) {
            echo 'Password is missing.';
        } else {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
        }
    }

    if (isset($_POST['logout'])) {
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
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <p>login success</p>
        <p> hello <?php echo $_SESSION['username'] ?></p>
        <form action='isset.php' method="post">
            <input type='submit' name="logout" value="logout" />
        </form>
    <?php else: ?>
        <form action="isset.php" method="post">
            <label>username</label>
            <input type='text' name='username' />
            <br>
            <label>password</label>
            <input type='password' name='password' />
            <br>
            <input type='submit' value="login" name='login' />
        </form>
    <?php endif; ?>
</body>

</html>