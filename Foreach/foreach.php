<?php 
$colors = array("red", "green", "blue", "yellow"); 



for ($x = 0; $x < count($colors); $x++){
echo $colors[$x];
echo "<br>";
} //metodo uno

foreach ($colors as $value) {
    echo "$value <br>";
}
//metodo dos
?>