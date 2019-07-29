<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Practicando con PHP Carranza</title>
<h1 align=center>Control de FrenoSeguro</h1>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>No.</th>
  			<th>ID</th>
  			<th>Cliente</th>
			<th>Vehiculo</th>
			<th>Estado</th>
  			<th>Descripcion</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM clientes";
      $resultado=mysql_query($sentencia);
      while($filas=mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['no']; echo "</td>";
          echo "<td>"; echo $filas['id_cliente']; echo "</td>";
          echo "<td>"; echo $filas['clientenombre']; echo "</td>";
	  echo "<td>"; echo $filas['vehiculo'];echo "</td>";
	  echo "<td>"; echo $filas['estado']; echo "</td>";
          echo "<td>"; echo $filas['descripcion']; echo "</td>";
          echo "<td>  <a href='modif_prod1.php?no=".$filas['no']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prod.php?no=".$filas['no']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>

</body>
</html>
