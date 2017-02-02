<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTORES</title>
  </head>
  <body>

  <!--MENU-->
    <h1><a href="index.php">LOGO</a></h1>
    <a href="actores.php">ACTORES</a>
    <a href="actoresTemp.php">TEMPORADA</a>
    <a href="episodios.php">EPISODIOS</a>

  <!--FIN MENU-->


    <?php
    // REALIZAMOS CONEXION
    include 'conexion.php';

    $juegodetronos= new conexion();
    if ($juegodetronos->getErrorConexion()==false) {
      //echo "Funciona";
    }

    ?>

    <table border=1>
    <tr>
      <th> ACTORES</th>
    </tr>

<?php

//
$resultado1 = $juegodetronos->actores();

while ($fila1=$resultado1->fetch_assoc()) {

  echo "<tr>";
  echo"<td> ".$fila1['name']." </td>";
}
