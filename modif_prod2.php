<?php
	include 'conexion.php';

	ModificarCliente($_POST['id_cliente'], $_POST['nombrecliente'], $_POST['vehiculo'],$_POST['estado'],$_POST['descripcion'], $_POST['no']);

	function ModificarCliente($id_cliente, $clientenombre, $vechiculo, $estado,$descripcion,$no)
	{
		$sentencia="UPDATE clientes SET id_cliente='".$id_cliente."', clientenombre= '".$clientenombre."', vehiculo='".$vehiculo."',estado='".$estado."',descripcion='".$descripcion."' WHERE no='".$no."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Cliente Modificado exitosamente");
	window.location.href='index.php';
</script>
