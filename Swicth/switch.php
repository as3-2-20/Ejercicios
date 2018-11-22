<?php

$favcolor = "red";

switch ($favcolor) {
    case "pink":
        echo "Your favorite color is pink!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "red":
        echo "Your favorite color is red!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

//funciona por casos si el caso uno cumple la variable hace un break e imprime sino sigue los siguientes casos
?>