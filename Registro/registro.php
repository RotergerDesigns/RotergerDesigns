<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estiloregistro.css">
    <link rel="shortcut icon" href="../Img\logos\logorosa.jpg">
   
</head>
<body>
    <div id>
    <form method="post">
    	<h1>¡REGISTRATE!</h1>
    	<input type="text" name="name" placeholder="Usuario">
    	<input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
    	<input type="submit" name="register" >
    </form>
</div>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>