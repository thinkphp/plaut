<?php

function autoload() {

         spl_autoload_register(

            function( $class ) {

                $class = strtolower($class);

                if(file_exists(ROOT_DIR . 'core/'. $class . '.php')) {

                    require_once ROOT_DIR . 'core/' . $class . '.php';
                }
            }
         );
}
?>
