<?php

function __autoload($class_name)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR,ROOT .'/'.$class_name.'.php');
        
    if(is_file($path)){
      include_once($path);
    }
}