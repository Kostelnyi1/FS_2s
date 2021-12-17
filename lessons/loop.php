<?php
$Far = -50;
wile ($Far <= 50) {
    $Cel = round (($Far - 32) * 5 / 9, 2);
    echo 'F' . $Far . '= C' . $Cel . <br>;
    $Far += 1;
}
