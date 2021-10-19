<?php 
session_start();
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $password = trim($_POST['password']);
		$password_encriptada = hash('sha512' , $password);
	    $fechareg = date("d/m/y");
	
	    $consulta = "INSERT INTO datos(nombre, email, contraseña, fecha_reg) VALUES ('$name','$email','$password_encriptada','$fechareg')";
	    
		$verificar_correo = mysqli_query($conex, "SELECT * FROM datos WHERE email='$email' ");

		if (mysqli_num_rows($verificar_correo) > 0 )
		 {
			?> 
	    	<h3 class="bad">¡El Correo Ya Esta Registrado!</h3>
           <?php
		   exit();
		}
	
		$verificar_name = mysqli_query($conex, "SELECT * FROM datos WHERE nombre='$name' ");

		if (mysqli_num_rows($verificar_name) > 0 )
		 {
			?> 
	    	<h3 class="bad">¡El Usuario Ya Esta Registrado!</h3>
           <?php
		   exit();
		}

		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
			$_SESSION['usuario'] = $name;
	    	header("location:home.php");
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
       <?php
}
}

?>

<!--		$password_encriptada = hash('sha512' , $password);
->