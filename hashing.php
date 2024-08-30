<?php
$password = 'hello124';
$hash = password_hash($password, PASSWORD_DEFAULT);
if (password_verify('hello124', $hash)) {
    echo "you are logged in";
} else {
    echo "incorrect password";
}
