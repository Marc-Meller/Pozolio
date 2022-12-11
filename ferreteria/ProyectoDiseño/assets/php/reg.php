<?php
	//Conexion con la base de datos
	$link = mysql_connect("localhost","root","") or die ("<h2>No se encuentra el servidor</h2>");;
	$db = mysql_select_db("talleryrefacciones",$link) or die ("<h2>Error de conexion</h2>");
	
	//Obtenemos los valores del formulario
	$nombre=$_POST['nombreUsuario'];
	$apellidos=$_POST['apellidos'];
	$correo=$_POST['email'];
	$passw=$_POST['passw'];
	$rpassw=$_POST['rpassw'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	
	//Validacion de campos
	$req = (strlen($nombre)*strlen($apellidos)*strlen($correo)*strlen($passw)*strlen($rpassw)*strlen($telefono)*strlen($direccion)) or die ("No se han llenado todos los campos <br><br><a href ='register.html'>");;
	
	//Se confirma la contraseña
	
	if ($passw != $passw) {
		("La contraseña no coiciden <br><br><a href= "register.html">volver</a>'");
	}
	
	//Encriptacion de contraseña
	$contraseñaUsuario = md5($passw);
		
	//Ingresos de la informacion a la tabla de datos
	mysql_query("INSERT INTO usuarios VALUES ('','$nombre','$apellidos','$correo','$nombre','$passw','$telefono','$direccion',)",$link) or die ("<h2>No se encuentra el servidor</h2>");