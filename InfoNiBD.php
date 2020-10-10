<?php
	
	session_start();
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: InformacionNi.php");
	}
	
	$sql = "SELECT * FROM informacionniño";
	$result=$mysqli->query($sql);
	
	$bandera = false;
	
	if(!empty($_POST))
	{
		$NombreNi = mysqli_real_escape_string($mysqli,$_POST['NombreNi']);
		$EdadNi= mysqli_real_escape_string($mysqli,$_POST['EdadNi']);
		$Enfermedades = mysqli_real_escape_string($mysqli,$_POST['Enfermedades']);
		
		
		$error = '';
		
					
				
		$sqlUsuario = "INSERT INTO informacionniño (NombreNi, EdadNi, Enfermedades) VALUES('$NombreNi','$EdadNi','$Enfermedades')";
			$resultUsuario = $mysqli->query($sqlUsuario);
			
			if($resultUsuario>0)
			$bandera = true;
			else
			$error = "Error al Registrar";
		}
	
?>