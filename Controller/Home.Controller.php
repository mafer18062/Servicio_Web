<?php

    include ("./Framework/Smarty/libs/Smarty.class.php");    
    class Home
    {
        public $smarty;

        public function __construct()
        {
            $this->smarty=new Smarty();
        }

        public function Inicio()
        {
            $conex=new Conexion();

            $this->smarty->assign('title',"HOME");
            $this->smarty->display('Home.tpl');

            
        }

        public function Fin()
        {
            $this->smarty->assign('title',"FIN");
            $this->smarty->display('Fin.tpl');   
        }
    }
?>