<?php
error_reporting(0);
$conex = mysqli_connect("localhost","root","","registro"); 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_encriptada = hash('sha512' , $password);



$validar_login = mysqli_query($conex, "SELECT * FROM datos WHERE email='$email' and nombre='$name' and contraseña='$password_encriptada'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $name;
    header("location: ../Registro/home.php");
    exit();
} 

else{

    ?> 
	    	<h3 class="bad">El Usuario No Esta Registrado</h3>
           <?php
           exit();
    
}

?>