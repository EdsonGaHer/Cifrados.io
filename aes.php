<?php
include("db.php");

$key = "EdGarHer000927";

if (isset($_POST['register'])) {
	if (strlen($_POST['name']) >= 1) {

		$name = trim($_POST['name']);

		$direccion = trim($_POST['direccion']);

		$claveE = db::encryption($name);


		$direccionE = db::encryption($direccion);


		$consulta = "INSERT INTO aes(mensaje,direccion) VALUES ('$claveE','$direccionE')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
?>
			<script language="javascript">
				alert("Mensaje ingresado correctamente")
			</script>

		<?php
		} else {
		?>

			<script language="javascript">
				alert("¡Ups ha ocurrido un error!")
			</script>

		<?php
		}
	} else {
		?>
		<script language="javascript">
			alert("¡Por favor inserte un mensaje!")
		</script>






		<?php
	}
}
///////////////////////////////////////
$consulta2 = "SELECT * FROM aes";
$resultadoMensaje = mysqli_query($conex, $consulta2);



////////////////////////////////////////
if (isset($_POST['ver'])) {
	if (strlen($_POST['name']) >= 1) {

		$name = trim($_POST['name']);
		$claveD = db::decryption($name);


		$consulta = "SELECT * FROM aes";
		$resultado = mysqli_query($conex, $consulta);

		if ($claveD <= 1) {
			echo ($claveD);
		}
	}
}

////////////////////////////////////
if (isset($_POST['register2'])) {
	if (strlen($_POST['name']) >= 1) {
		///////////////////////////////////
		$name = trim($_POST['name']);



		//////////////////////////////////////////////
		$claveE = db_rsa::encryp_rsa($name, $key);

		///////////////////////////////	
		$consulta = "INSERT INTO rsa(mensaje) VALUES ('$claveE')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
		?>
			<script language="javascript">
				alert("Mensaje ingresado correctamente")
			</script>

		<?php
		} else {
		?>

			<script language="javascript">
				alert("¡Ups ha ocurrido un error!")
			</script>

		<?php
		}
	} else {
		?>
		<script language="javascript">
			alert("¡Por favor inserte un mensaje!")
		</script>






		<?php
	}
}

$consulta3 = "SELECT * FROM rsa";
$resultadorsa = mysqli_query($conex, $consulta3);

///////////////////////////////////////
if (isset($_POST['ver2'])) {
	if (strlen($_POST['name']) >= 1) {

		$name = trim($_POST['name']);
		$claveD_rsa = db_rsa::decrypt_rsa($name, $key);

		if ($claveD_rsa <= 1) {
			echo ($claveD_rsa);
		}

		$consulta = "SELECT * FROM rsa";
		$resultado = mysqli_query($conex, $consulta);
	}
}




/////////////////
//hash_v1
if (isset($_POST['register_hashv1'])) {
	if (strlen($_POST['name']) >= 1) {

		$name = trim($_POST['name']);
		$direccion = trim($_POST['direccion']);
		$contraseña = trim($_POST['contraseña']);

		// encriptacion hash

		///$nameHashv1=md5($name);
		$dieccionHashv1=md5($direccion);
		$contraseñaHashv1=md5($contraseña);

		$consulta = "INSERT INTO hash_v1(nombre,direccion,contraseña) VALUES ('$name','$dieccionHashv1','$contraseñaHashv1')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
		?>
			<script language="javascript">
				alert("Mensaje ingresado correctamente")
			</script>

		<?php
		} else {
		?>

			<script language="javascript">
				alert("¡Ups ha ocurrido un error!")
			</script>

		<?php
		}
	} else {
		?>
		<script language="javascript">
			alert("¡Por favor inserte un mensaje!")
		</script>






<?php
	}
}


//Mostrar los datos de la base de datos en la tabla
$consultahashv1 = "SELECT * FROM hash_v1";
$resultadohash_v1 = mysqli_query($conex, $consultahashv1);

//hash_v2
if (isset($_POST['register_hashv2'])) {
	if (strlen($_POST['name']) >= 1) {

		$name = trim($_POST['name']);
		$direccion = trim($_POST['direccion']);
		$contraseña = trim($_POST['contraseña']);

		// encriptacion hashv2

		
		$dieccionHashv2=sha1($direccion);
		$contraseñaHashv2=sha1($contraseña);

		$consulta = "INSERT INTO hash_v2(nombre,direccion,contraseña) VALUES ('$name','$dieccionHashv2','$contraseñaHashv2')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
		?>
			<script language="javascript">
				alert("Mensaje ingresado correctamente")
			</script>

		<?php
		} else {
		?>

			<script language="javascript">
				alert("¡Ups ha ocurrido un error!")
			</script>

		<?php
		}
	} else {
		?>
		<script language="javascript">
			alert("¡Por favor inserte un mensaje!")
		</script>






<?php
	}
}


//Mostrar los datos de la base de datos en la tabla
$consultahashv2 = "SELECT * FROM hash_v2";
$resultadohash_v2 = mysqli_query($conex, $consultahashv2);


?>