<?php

  class User
  {
    public $user;
   // public $registro;
    //public $blog;
    public $smarty;

    public function __construct()
    {
      $this->user=new Usuarios();
     // $this->user=new Registros();
      //$this->user=new Bienvenidos();
      $this->smarty=new Smarty();
    }
    public function BuscarUsuario()
    {
      $correo=$_POST['correo'];
      $pass=$_POST['pass'];

      $us=$this->user->BuscarUser($correo,$pass);

      var_dump($us);

      //$consulta=mysqli_fetch_assoc($us);
      
//echo "<br/><br/>";

     // var_dump($consulta);

      //echo "<br/><br/>";

      //echo "correo: ".$consulta['Correo'];
     
      //$this->smarty->assing('DatoUser',$consulta);


    }
    public function Registrarse()
    {
      $this->smarty->assign=('title','Registro');
      $this->smarty->display=('Registrarse.tpl');
    }

   // public function Registrarse()
   // {
    //  $correo=$_POST['correo'];
    //  $pass=$_POST['pass'];

    //  $registro=$this->user->Registrarse($correo,$pass);

     // var_dump($us);

 // }
}
  
?>
