<?php

function __autoload($class_name)
{
    $array_paths = array(
        'Store/Services',
    );

    foreach($array_paths as $path){
       
        $path = str_replace('\\', DIRECTORY_SEPARATOR,ROOT .'/'.$class_name.'.php');
        
        if(is_file($path)){
            include_once($path);
        }
    }
}