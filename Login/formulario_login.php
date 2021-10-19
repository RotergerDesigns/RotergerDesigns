
<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('location: ../Registro/home.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilologin.css">
    <link rel="shortcut icon" href="../Img\logos\logorosa.jpg">
   
</head>
<body>
    <div id>
    <form method="post">
    	<h1>¡Entra!</h1>
        <input type="text" name="name" placeholder="Nombre de Usuario">
    	<input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
    	<input type="submit" name="register">
    </form>
</div>
        <?php 
        include("login.php");
        ?>
</body>
</html>