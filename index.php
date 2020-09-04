<!DOCTYPE html>
<?php
$con = mysqli_connect("bmbnzl0pj5j0antx7kfi-mysql.services.clever-cloud.com", "urunwc11v0krlr3b", "1TnK6uZCe1OH5rL6MqeD", "bmbnzl0pj5j0antx7kfi");

?>
<meta charset="UTF-8">
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body> 
 
  <form action="index.php" method="POST">
  <div class="card  text-white text-center bg-dark">
  <div class="card-header">Iniciar Sesion </div>
  <div class="card-body">
    <h5 class="card-title">Ingresa tus Datos</h5>
   <div class="form-group">
  <input type="text" name="email" placeholder="Correo electrónico" > 
   </div>

   <div class="form-group">
  <input type="password" name="passw" placeholder="Contraseña" >
   </div>

   <div class="form-group">
   <a  class="btn btn-primary" onclick="location.href='registrar.php'">Registrar</a>
   </div>

   <div class="form-group">
   <input type="submit" name ="log"  class="btn btn-primary" value="Ingresar">
   </div>

  <div class="card-footer text-muted">
    Ruralkeymaster..
  </div>


  </div>
  </div>
  <?php
        if(isset($_POST['log'])){

          $email = $_POST['email'];
          $password = $_POST['passw'];
          $ejecutar = "SELECT  Correo, pasword   FROM 
            usuarios
              WHERE Correo= '$email'";
              $consulta = mysqli_query($con,$ejecutar);

          if(mysqli_num_rows($consulta) >0){
            $data=mysqli_fetch_array($consulta);
          if(password_verify($password,$data['pasword'])){

            header("Location:Admin.php");
          }else{
            echo "<script>alert('datos incorrectos')</script>";
          }
          
        }else{
          echo "<script>alert('El usuario no existe')</script>";
        }
        }
    ?>
  </form>
</body>
</html>