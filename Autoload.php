<?php
         function Autoload($class)
         {
           //echo $class.'<br>';
             if(is_file('Controller/'.$class.'.Controller.php'))
             {
               require_once('Controller/'.$class.'.Controller.php');
             }
             else if(is_file('Framework/Smarty/'.$class.'.class.php'))
             {
               require_once('Framework/Smarty/'.$class.'.class.php');
             }
             else if (is_file('Model/'.$class.'.Model.php'))
             {
               require_once('Model/'.$class.'.Model.php');
               //echo "en auto load conexion";

             }
         }
         spl_autoload_register('Autoload');
?>   
