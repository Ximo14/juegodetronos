<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JUEGO DE TRONOS</title>
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
      <th> TITULO</th>
      <th> TRAMA </th>
      <th> CREADORES </th>
      <th> INICIO SERIE </th>
      <th> FIN SERIE </th>
      <th> TEMPORADAS </th>
      <th> GENEROS </th>
    </tr>

<?php


$resultado1 = $juegodetronos->resumen();
while ($fila1=$resultado1->fetch_assoc()) {

  echo "<tr>";
  echo"<td> ".$fila1['title']." </td>";
  echo"<td> ".$fila1['plot']." </td>";
  echo"<td> ".$fila1['creators']." </td>";
  echo"<td> ".$fila1['season_start']." </td>";
  echo"<td> ".$fila1['season_end']." </td>";
  echo"<td> ".$fila1['seasons']." </td>";
  echo"<td> ".$fila1['generes']." </td>";

}


 ?>










  </body>
</html>
