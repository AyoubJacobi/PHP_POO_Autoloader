<?php
namespace app;
    class Autoload{
        static function Register(){
            spl_autoload_register(array(__CLASS__, 'autoloader'));
        }
        static function autoloader($class){
           
                $class = str_replace(__NAMESPACE__.'\\','', $class);
                $class = str_replace('\\','/', $class);
                require __DIR__ .'/'. $class .'.php';

            

        }
    }
