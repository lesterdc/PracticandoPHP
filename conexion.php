<?php

  $conexion = mysql_connect("localhost","usuario","usuario");
  mysql_select_db("mis_clientes",$conexion);
  
  mysql_query("SET NAMES 'utf8'");
?>
