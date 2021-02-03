<?php

    include("./Framework/Smarty/Smarty.class.php");
    class Home
    { 
        public $smarty;

        public function __construct();
        { 
           $this->smarty=new Smarty();
        }

    public function Inicio();
        { 
           $this->smarty->assign ('title', "Inicio");
           $this->smarty->display ('Inicio.tpl');
        }

        public function Fin();
        { 
           $this->smarty->assign ('title', "Fin");
           $this->smarty->display ('Fin.tpl');
        }
        
    }



?>