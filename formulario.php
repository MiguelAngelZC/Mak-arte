<html>
<head>
 <title></title>
</head>
<body>
<?php
include("conexion.php");
if (isset($_POST['submit'])) {
 if (empty($_POST['Nombre'])) {
 echo "<p>Introduzca el <b>nombre</b>.</p>";
 }
 else if (strlen($_POST['Correo']) < 3) {
 echo "<p>El Correo debe tener como minimo <b>3</b> caracteres.</p>";
 }
 else if(empty($_POST['Comentario'])){
 }else{
 $sql = "INSERT INTO Nombre (Nombre, Correo, Comentario) VALUES ('$_POST[Nombre]',
'$_POST[Correo]','$_POST[Comentario]')";

 }

 $resultado = $dp->query($sql);
 if ($resultado)
 {
 echo "<p> Datos agregados con exito.</p>";
 } else {
 echo "<p>Datos <b>no</b> agregados.</p>";
 }
 echo " [ <a href='formulario.php'> Introducir
nueva fila</a>]";
 }

 //FORMULARIO;
 mysqli_close($dp);
?>
<form action= "formulario.php" method="post" >
 <table>
 <tr><td> Nombre:</td><td><input type="text" name="Nombre"></td></tr>
 <tr><td> Correo</td><td><input type="text" name="Correo"></td></tr>
 <tr><td> Comentario</td><td><input type="text" name="Comentario"></td></tr>

 <tr><td><input type="submit" value="Introducir datos"
name="submit"></td></tr>
 </table>
 </form>
</body>
</html>
