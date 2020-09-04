<!DOCTYPE html>
<html>

<?php
$con = mysqli_connect("bmbnzl0pj5j0antx7kfi-mysql.services.clever-cloud.com", "urunwc11v0krlr3b", "1TnK6uZCe1OH5rL6MqeD", "bmbnzl0pj5j0antx7kfi");

?>
<head>
	<title>Bienvenido</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
<body>
	<nav class="navbar navbar-expand-lg navbar-dark  bg-primary   scrolling-navbar ">
  <a class="navbar-brand" href="index.php">Ruralkeymaster</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a  class="nav-link" href="index.php">Inicio </a>
      </li>
    </ul>
  </div>
  <div class="form-group">
   <a  class="btn btn-primary" onclick="location.href='index.php'">Cerrar Sesion</a>
   </div>

</nav>
	<h1 align="center" style="color:white">Bienvenido Admin</h1>

	<table  align="center" width="500" border="2" style="background-color: #F9F9F9;">
	<tr>
		<th>id</th>
		<th>nombre</th>
		<th>correo</th>
		<th>pasword</th>
		<th>tipo</th>
	</tr>

<?php

	$consulta = "select * from usuarios";

	$ejecutar = mysqli_query($con,$consulta);

	$i =0;
	while ($fila= mysqli_fetch_array($ejecutar)) {
		$id= $fila['ID'];
		$nombre= $fila['Nombre'];
		$correo= $fila['correo'];
		$pasword= $fila['pasword'];
		$tipo= $fila['tipo'];
		$i++;
	?>
         <tr align="center">
                <td><?php echo $id; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $correo; ?></td>
                <td><?php echo $pasword;   ?></td>
                <td><?php echo $tipo; ?></td>
				
            </tr>
            <?php } ?>
     </table>

</body>
</html>
