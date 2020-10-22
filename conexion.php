<?php
	$mysqli=new mysqli("localhost","root","2803","cuidadodeninos"); 
	
	if(mysqli_connect_error()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>