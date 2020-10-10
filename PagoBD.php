<?php
	
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: Pago.php");
	}
	
	$sql = "SELECT * FROM metodopago";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$NumTarjeta = mysqli_real_escape_string($mysqli,$_POST['NumTarjeta']);
		$PIN = mysqli_real_escape_string($mysqli,$_POST['PIN']);
		
		$error = '';
		
					
				
		$sqlUsuario = "INSERT INTO metodopago (NumTarjeta, PIN) VALUES('$NumTarjeta','$PIN')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
	
?>