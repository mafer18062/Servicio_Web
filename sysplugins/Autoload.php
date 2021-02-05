<?php

    function Autoload($class)
    {
        if (is_file ('Controller/'.$class.'.Controller.php'))
        {
            require_once ('Controller/'.$class.'.Controller.php');
        }
        else if (is_file ('Framework/Smarty/'.$class.'.class.php'))
        {
            require_once ('Framework/Smarty/'.$class.'.class.php');
        }
    }

    spl_autoload_register ('Autoload.php');

?>