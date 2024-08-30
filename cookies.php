<?php

setcookie('fav_food', 'pizza', time() + 86400, '/');
setcookie('drink', 'water', time() + 86400 * 2, '/');

foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}

if (isset($_COOKIE['fav_food'])) {
    echo "buy some {$_COOKIE['fav_food']}";
} else {
    echo "i dont know your favourite food";
}
