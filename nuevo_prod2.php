<?php
	include 'conexion.php';

	NuevoCliente($_POST['id_cliente'], $_POST['nombrecliente'], $_POST['vehiculo'],$_POST['estado'],$_POST['descripcion']);

	function NuevoCliente($id_cliente, $clientenombre, $vehiculo,$estado,$descripcion)
	{
		echo $sentencia="INSERT INTO clientes (id_cliente, nombrecliente,vehiculo,estado, descripcion) VALUES ('".$id_cliente."', '".$clientenombre."', '".$vechiculo."','".$estado."','".$descripcion."')";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Cliente Ingresado exitosamente");
	window.location.href='index.php';
</script>
