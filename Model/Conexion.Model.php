<?php
    class Conexion extends mysqli
    {
        function __construct()
        {
        $servidor="localhost";
        $pass="";
        $user="root";
        $BaseDatos="blogsextopcc";

        parent::__construct($servidor,$user,$pass,$BaseDatos);
        $this-> query("SET NAMES 'utf8';");
        $this-> connect_error? die('Error en la conexion'): $error='</br> Conectado';
        //echo $error;
        unset($error);
        }
        
    }

  class User
  {
    public $user;

    public function __construct()
    {
      $this->user=new Usuarios();
    
    }
    public function BuscarUsuario()
    {
      $us=$this->user->BuscarUser("201900040@colsanjose.edu.gt","123456789");

      var_dump($us);
    }
  }

?>