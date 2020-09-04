<!DOCTYPE html>
<?php
$con = mysqli_connect("bmbnzl0pj5j0antx7kfi-mysql.services.clever-cloud.com", "urunwc11v0krlr3b", "1TnK6uZCe1OH5rL6MqeD", "bmbnzl0pj5j0antx7kfi");

?>
<meta charset="UTF-8">
<html>
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body> 
 
  <form action="registrar.php" method="POST">
  <div class="card  text-white text-center bg-dark">
  <div class="card-header">Registrar Usuarios</div>
  <div class="card-body">
    <h5 class="card-title">Ingresa tus Datos</h5>

  <form action="registrar.php" method="POST" >

  <div class="form-group">
 <input type="text" name="nombre" placeholder="Nombre">
 </div>

 <div class="form-group">
 <input type="email" name="correo" placeholder="Correo"> 
 </div>

<div class="form-group">
  <input type="password" name="pasword" placeholder="Password"> 
 </div>

<div class="form-group">
  <input type="text" name="tipo" placeholder="Tipo de Usuario">
 </div>

<div class="form-group">
  <input type="submit"  class="btn btn-primary" name ="insertar" value="Registrarte">
 </div>

 <div class="form-group">
   <a  class="btn btn-primary" onclick="location.href='index.php'">Ya Tienes una Cuenta?</a>
   </div>

 </form>

<?php
        if(isset($_POST['insertar'])){
          $nombre = $_POST['nombre'];
          $correo = $_POST['correo'];
          $pasword = $_POST['pasword'];
          $passSifra=password_hash($pasword,PASSWORD_DEFAULT);
          $tipo = $_POST['tipo'];

          $insertar = "INSERT INTO `usuarios` (
              Nombre,
              correo,
              pasword,
              tipo)
        VALUES
              ('$nombre',
                '$correo',
                '$passSifra',
                 '$tipo')";

          $ejecutar = mysqli_query($con, $insertar);
          
            if($ejecutar){
            echo "<script>alert('El usuario ha sido creado')</script>";
          } 
        }



  ?>

  </body>
</html>