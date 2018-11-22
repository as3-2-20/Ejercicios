<?php

//variables de nuestro formulario htm
//$nombre = $_POST['nombre'];
//$contrasena = $_POST['contrasena'];


//datos de nuestro mysql
$servername = "localhost:3307";
$username = "root";
$password ="";
$db ="usuario";

//crear conexion

$conn = mysqli_connect($servername,$username,$password,$db);

//comprobar conexion !siginifica lo contrario
if (!$conn)
  {
  die("Conexion fallida: " . mysqli_connect_error());
  }
  //echo "Conexion creada";
?>
<body>
<html>
<form action="insertuser_2.php" method="POST">
Nombre de usuario: <input type="text" name="text"><br>
Contrasena:<input type="password" name="password"><br>
<input type="submit" value="insert">
</form> 
</body>
</html>