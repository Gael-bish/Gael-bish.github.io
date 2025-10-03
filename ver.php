<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
  </head>
  <body>
    <table><table border="1px">


<?php
Session_start();
if (isset($_SESSION['admin'])) {

?>
<a href="cerrar.php">cerrar sesion</a>
<a href="index.html">insertar</a>

<?php
$usuario="root";
$servidor="localhost";
$base_datos= "musica";
$contraseña= "";
$respuesta=mysqli_connect($servidor, $usuario,$contraseña, $base_datos);
if ($respuesta==true) {
$consulta= "SELECT * FROM instrumentos";
$respuesta2=mysqli_query($respuesta,$consulta);
echo "<th>ID</th>";
echo "<th>NOMBRE</th>";
echo "<th>CORREO</th>";
echo "<th>CONTRASEÑA</th>";
echo "<th>modificar</th>";
echo "<th>Eliminar</th>";
foreach ($respuesta2 as $instrumentos) {
  echo "<tr>";
  echo "<td>".$instrumentos['ID']."</td>";
  echo "<td>".$instrumentos['nombre']."</td>";
  echo "<td>".$instrumentos['correo']."</td>";
  echo "<td>".$instrumentos['contraseña']."</td>";

  ?><td><a href="otro.php?valor=<?php echo $instrumentos['ID']; ?>">Modificar</a><?php
  ?><td><a href="eliminar.php?valor=<?php echo $instrumentos['ID']; ?>">Eliminar</a></td><?php



}
}
}
else {
  echo "ingresa tu contraseña y correo para ingresar";
  header("refresh:2;url=administrador.html");
}
 ?>
 </table>
</body>
</html>
