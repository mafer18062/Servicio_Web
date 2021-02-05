<?php
         function Autoload($class)
         {
             if(is_file('Controler/'.$class.'.Controller.php'))
             {
               require_once('Controller/'.$class.'.Controller.php');
             }
             else if(is_file('Framework/Smarty/'.$class.'Smarty.class.php'))
             {
               require_once('Framework/Smarty/'.$class.'Smarty.class.php');
             }
         }

         spl_autoload_registred('Autoload');  
?>   