
<?php
$cookie = "user";
$cookievalue = "HEHE";

setcookie($cookie, $cookievalue, time() + (30), "/");

if (isset($_COOKIE[$cookie])) {
    echo "Cookie " . $cookie . " da ton tai !";
} else {
    echo "Cookie " . $cookie . " khong ton tai xxx !";
}

?>