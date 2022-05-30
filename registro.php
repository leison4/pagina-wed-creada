<?
ini_set('display_errors', 1);
error_reporting(E_ALL);
include('db.php');

$Nombre=$_POST['txtNombre'];
$Usuario=$_POST['txtUsuario'];
$Contraseña=$_POST['txtContraseña'];
$consulta="INSERT INTO `usuarios` (`Nombre`, `usuario`, `Contraseña`)
 VALUES ($Nombre', '$Usuario', '$Contraseña');";

 $resultado=mysqli_query($conexion,$consulta) or die("error de registro");

 echo "registro exitoso";

 mysqli_close($conexion);



?>