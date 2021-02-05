<?php
    incluir ( 'Controlador / Home.controller.php' );

   if ( isset ( $ _GET [ 'controlador' ]) && isset ( $ _GET [ 'method' ]))
   {
        $controlador = $_GET [ 'controlador' ];
        $method = $_GET [ 'method' ];
   }
   else
   {
     $controller = "Inicio" ;
     $method = "Inicio" ;
   }
   
   if ( class_exists ( $controlador ) && method_exists ( $controlador , $method ))
   {
        $clase = nuevo  $controlador ;
        $clase -> $method ();
   }
   else
   {
       echo  "clase no existe o el metodo es incorrecto" ;   
   }
 
   
?>
