<?php
$horario = array(
    array("SGB","WEB","SEG","RED","SEG"),  // 8-9
    array("EIE","SEG","SEG","RED","SEG"),  // 9-10
    array("SIS","RED","SIS","SIS","RED"),  // 10-11
    array("SIS","RED","SIS","SIS","RED"),  // 11-12
    array("WEB","SGB","EIE","WEB","ING"),  // 12-13
    array("WEB","SGB","EIE","WEB","ING")  // 13-14
);
$dia_actual = date("N")-1;
$hora_actual = date("G")-8;

echo $dia_actual.": Dia"."<br>"; //imprimo el dia.

echo $hora_actual.": Hora"."<br>"; //imprimo la hora.

echo $horario[$hora_actual][$dia_actual].": Asignatura que toca ahora"."<br>"."<br>"; //imprimo lun dato del array combinando con las variables


//con foreach
echo "Con Foreach"."<br>";

echo "<table border='1'>";
foreach ($horario as $i=>$dia) {
    echo "<tr>";
    foreach ($dia as $j=>$asig) {
        echo "<td>";       
        if ($i == $hora_actual && $j == $dia_actual) {
            echo "<b>" . $asig . "</b>";
            //echo "<b>" . $horario[$i][$j] . "</b>";
        } else {
            echo $horario[$i][$j];
        }
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";


//con for
echo "Con For"."<br>";
echo "<br><br>";
echo "<br><br>";
echo "<table border='1'>";
for ($i=0; $i<count($horario); $i++) {
    echo "<tr>";
    for ($j=0; $j<count($horario[$i]); $j++) {
        echo "<td>";
        if ($i == $hora_actual && $j == $dia_actual) {
            echo "<b>" . $horario[$i][$j] . "</b>";
        } else {
            echo $horario[$i][$j];
        }
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";
