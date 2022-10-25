<?php
Header('Access-Control-Allow-Origin:*');
	if($_GET)
	{
    $comando =  $_GET['comando'];
    $servername = "localhost";
    $username = "id19756339_manuel";
    $password = "q80r5jwp)NO{p*>7";
    $dbname = "id19756339_guia09";
    //Crear la conexión 
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if($conn->connect_error){
      die("Connection failed: ".$conn->connect_error);
    }
		if($comando=='autenticar'){
			$usuario = $_GET["usuario"];
			$constrasena = $_GET["contrasena"];
			$sql = "Select * from usuarios where usuario = '$usuario' and contrasena = '$contrasena'";
			$result = $conn->query($sql);
			if($result->num_rows>0){
				echo'{"encontrado":"si"}';
				}else{
				echo'{"encontrado":"no"}';
				}
		}
		$conn->close();
	}
?>