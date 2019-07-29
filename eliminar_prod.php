<?php
	include "conexion.php";

	EliminarCliente($_GET['no']);

	function EliminarCliente($no)
	{
		$sentencia="DELETE FROM clientes WHERE no='".$no."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Cliente Eliminado exitosamente");
	window.location.href='index.php';
</script>
