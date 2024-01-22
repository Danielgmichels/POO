<?php

class Autoload{

    public function __construct(){

                //$this->load()
        spl_autoload_register([$this, 'load']);
    }

    private function load($className){
        set_include_path(__DIR__);
        spl_autoload_extensions('.Class.php');
        spl_autoload($className);
    }
}