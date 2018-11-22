<?php





//for
$v = [1,2,3,4,5,6,7,8,9,10,11,12];
//echo $suma = $v[0] + $v[1];
$suma = 0;
echo "suma: " . $suma . "<br>";
echo "for....<br>";
for ($i=0; $i < count($v); $i++) {
    $suma = $suma + $v[$i];
    echo "i: " . $i . ";  ";
    echo "v[$i]: " . $v[$i] . "; ";
    echo "suma: " . $suma . "<br>";    
}
echo "...for<br>";
echo "$suma<br><br>";








//foreach
echo "con foreach <br>";
$suma = 0;

foreach ($v as $x)
{
    echo "x: $x; suma: $suma <br>";
    $suma = $suma + $x;
}

echo "$suma <br><br>";








// FOREACH Dos dimensiones
$w = 
[
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]    
];
$suma = 0;
foreach ($w as $v) {
    foreach ($v as $x) {
        echo "x: $x; suma: $suma <br>";
        $suma = $suma + $x;
    }
}
echo "+dos array, Suma de array foreach: $suma<br><br>";









// FOR Dos dimensiones

$suma=0;
for ($i=0; $i< count($w); $i++){
    for ($a=0; $a< count($w[$i]); $a++){
        $suma= $suma+$w[$i][$a];
    }
     
}
echo "+dos array, suma de todos los array con for $suma";