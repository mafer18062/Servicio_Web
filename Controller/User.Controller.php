<?php

  class User
  {
    public $user;
    //public $smarty; 

    public function __construct()
    {
      $this->user=new Usuarios();
      //$this->smarty=new Smarty();
    
    }

    //public function __construct()
    //{
      //$this->smarty->assign('title','Login');
     // $this->smarty->display (Login.tpl);
    
    //}
    public function BuscarUsuario()
    {
      //$email=$_POST['email'];
      //$pass=$_POST['pass'];


      //$us=$this->user->BuscarUser($email,$pass);

      $us=$this->user->BuscarUser("201900040@colsanjose.edu.gt","123456789");

      var_dump($us);
    }
  }
?>
