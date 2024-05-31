
<?php
$cookie = "user";
$cookievalue = "Nam";

setcookie($cookie, $cookievalue, time() - (500), "/");
//Một ngày bằng 86400s nhân với 30 ngày
if (isset($_COOKIE[$cookie])) {
    echo "Cookie " . $cookie . " da ton tai !";
} else {
    echo "Cookie " . $cookie . " khong ton tai xxx !";
}

?>