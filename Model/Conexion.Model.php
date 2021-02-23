<?php
    class Conexion extends mysql
    {
        function __construct()
        {
        $servidor="localhost";
        $pass="";
        $user="";
        $BaseDatos="";

        parent::__construct($servidor,$user,$pass,$BaseDatos);
        $this-> query("SET NAMES" 'utf8');
        $this-> connect_error? die('Error en la conexion'): $error='</br> Conectado';
        //echo $error;
        unset($error);
        }
        
    }
?>