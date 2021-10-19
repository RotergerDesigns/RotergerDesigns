<?php
session_start();

if(!isset($_SESSION['usuario'])){

    header("location: ../Login/formulario_login.php");
    ?> 
    <h3 class="bad">Inicia Session Para Entrar</h3>
   <?php
   session_destroy();
die();
}
?>