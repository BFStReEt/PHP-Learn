

<?php
$a = 5;
$b = 10;
function phepcong(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
phepcong();
echo $c;
?>
