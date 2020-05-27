<?php
	include ('Conexion.php');

	$con=new Conexion();

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$notel=$_POST['no. tel'];
	$correo=$_POST['correo'];
	$dirreccion=$_POST['dideccion'];


	$query="INSERT INTO `conts`(`ID`, `nombre`, `apellido`, `No. Tel`, `correo`, `dirección`) VALUES ('','$nombre','$apellido','$notel','$correo','$dirreccion');";
	$con->query($query);
	$con->close();
	header("location:contactos.html");
?>
