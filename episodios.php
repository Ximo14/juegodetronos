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
    <hr>
  <!--FIN MENU-->


    <?php
    // REALIZAMOS CONEXION
    include 'conexion.php';

    $juegodetronos= new conexion();
    if ($juegodetronos->getErrorConexion()==false) {
      //echo "Funciona";
    }

    ?>
    <form class="" action="testactorestemp.php" method="post">

    Selecciona Episodio = <select class="" name="select1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select> <hr>
      <input type="submit" name="" value="Enviar">

      </body>
    </html>
