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
      $sql=="SELECT * FROM `blogusuario` WHERE `Correo`='$user' AND`Pass`='$pass';";

      $consulta=$this->con->query($sql);
      $this->con->close();
      return $consulta();
    }
  }
?>
