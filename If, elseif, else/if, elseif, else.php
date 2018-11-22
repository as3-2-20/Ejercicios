<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t == "15") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

//si t es menor a 10 primero echo sino si es igual a 15 escribe el segundo echo sino el tercer echo
?>