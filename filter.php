<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>login</h1>
    <form action="filter.php" method="post">
        <label>username</label>
        <input type="text" name="name" />
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'name', FILTER_VALIDATE_EMAIL);
    echo "hello $username";
}
?>