<?php
	
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: InformacionTra.php");
	}
	
	$sql = "SELECT * FROM requisitos";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$NombreT = mysqli_real_escape_string($mysqli,$_POST['NombreT']);
		$NumeroT = mysqli_real_escape_string($mysqli,$_POST['NumeroT']);
		$Contacto = mysqli_real_escape_string($mysqli,$_POST['Contacto']);
		$Horario = mysqli_real_escape_string($mysqli,$_POST['Horario']);
		
		
		$error = '';
		
					
				
		$sqlUsuario = "INSERT INTO requisitos (NombreT, NumeroT, Contacto, Horario) VALUES('$NombreT','$NumeroT','$Contacto','$Horario')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
	
?>