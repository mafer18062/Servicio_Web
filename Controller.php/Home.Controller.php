<?php

    include ("./Framework/Smarty/Smarty.class.php");
    class Home
    {
        public $smarty;

        public function __construct()
        {
            $this-> $smarty=new $smarty();
        }

        public function Inicio()
        {
            $this->$smarty->assign('tittle',"Home");
            $this->smarty->display('Home.tpl');
        }

        public function Fin()
        {
            $this->$smarty->assign('tittle',"FIN");
            $this->smarty->display('Fin.tpl');   
        }
    }
?>