<?php
$url = "https://github.com/BFStReEt/PHP-Learn/commits/main/";

if (!filter_var($url, FILTER_VALIDATE_URL) == false) {
    echo "Day la url hop le !";
} else {
    echo "Khong la url hop le !";
}
