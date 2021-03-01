<?php

  class Usuarios
  {
    public $con;

    public function __construct()
    {
        $this->user=new Conexion();
    }

    public function BuscarUser($user, $pass)
    {
      $sql=

      $consulta=$this->con->query($sql);
      $this->con->close();
      return $consulta();
    }
  }
?>
