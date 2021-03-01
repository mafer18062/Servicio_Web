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
      $us=$this->user->BuscarUser();

      var_dump($us);
    }
  }
?>
