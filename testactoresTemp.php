<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTORES POR EPISODIO</title>
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
      <th> EPISODIOS</th>
    </tr>

<?php

// OTRA FORMA DE HACERLO (MENOS UTIL)

  /*if ($_POST['select1']=='1') {
    $resultado1 = $juegodetronos->capitulos();
  }

  elseif ($_POST['select1']=='2') {
    $resultado1 = $juegodetronos->capitulos(2);
}

elseif ($_POST['select1']=='4') {
  $resultado1 = $juegodetronos->capitulos(4);
}

elseif ($_POST['select1']=='5') {
  $resultado1 = $juegodetronos->capitulos(5);
}

elseif ($_POST['select1']=='6') {
  $resultado1 = $juegodetronos->capitulos(6);
}

elseif ($_POST['select1']=='7') {
  $resultado1 = $juegodetronos->capitulos(7);
}

elseif ($_POST['select1']=='8') {
  $resultado1 = $juegodetronos->capitulos(8);
}

elseif ($_POST['select1']=='9') {
  $resultado1 = $juegodetronos->capitulos(9);
}

elseif ($_POST['select1']=='10') {
  $resultado1 = $juegodetronos->capitulos(10);
}*/


// MEDIANTE FORMULARIO COGEMOS EL VALUE PARA FILTRAR POR EPISODIOS

$resultado1 = $juegodetronos->capitulos($_POST['select1']);

  while ($fila1=$resultado1->fetch_assoc()) {

    echo "<tr>";
    echo"<td> ".$fila1['name']." </td>";
    echo"<td> ".$fila1['episode']." </td>";

}


?>
