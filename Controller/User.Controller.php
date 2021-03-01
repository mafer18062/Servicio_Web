<?php

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
