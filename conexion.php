<?php

/**
 * Ximo Gil
 */
class conexion
{
  private $mysqli;
  private $errorConexion=false;


// REALIZAMOS CONEXION
  function __construct()
    {
      $this->mysqli = new mysqli ("localhost","root","","gameofthrones");
      if ($this->mysqli->connect_errno) {
        //Error
        $this->errorConexion=true;
      }
    }

    public function getErrorConexion()
    {
      return $this->errorConexion;
    }

    //CONSULTA INDEX.PHP

    public function resumen()
    {
      return $resultado1 = $this->mysqli->query("SELECT * FROM titles ");
    }

    // FIN CONSULTA INDEX.PHP

    // CONSULTA ACTORES.PHP
    public function actores()
    {
      return $resultado1 = $this->mysqli->query("SELECT name FROM season_ep ");
    }

    // FIN CONSULTA ACTORES.PHP

    // CONSULTA ACTORTEMP.PHP
    public function actorTemporada()
    {
      return $resultado1 = $this->mysqli->query("SELECT name,episode FROM season_ep ");
    }

    // FIN CONSULTA ACTORTEMP.PHP

    // CONSULTA EPISODIOS.PHP
    public function capitulos($episode)
    {
      return $resultado1 = $this->mysqli->query("SELECT name,episode FROM season_ep WHERE episode='".$episode."'");
    }

    // FIN CONSULTA EPISODIOS.PHP



  }



 ?>
