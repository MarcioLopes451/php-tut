<?php
include('database.php');

// $username = 'johna';
// $password = 'rocko234';

// $hash = password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

// try {
//     mysqli_query($conn, $sql);
//     echo 'user is now registered.';
// } catch (mysqli_sql_exception) {
//     echo 'could not register user.';
// }

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'] . "<br>";
        echo $row['user'] . "<br>";
        echo $row['reg_date'] . "<br>";
    }
} else {
    echo 'no user found.';
}
mysqli_close($conn);
