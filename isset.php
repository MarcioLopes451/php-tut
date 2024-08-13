<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>login page</p>
    <form action="isset.php" method="post">
        <label>username</label>
        <input type='text' name='username' />
        <br>
        <label>password</label>
        <input type='password' name='password' />
        <br>
        <input type='submit' value="login" name='login' />
    </form>
</body>

</html>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo 'username is missing.';
    } elseif (empty($password)) {
        echo 'password is missing.';
    } else {
        echo "hello {$username}";
    }
}

?>