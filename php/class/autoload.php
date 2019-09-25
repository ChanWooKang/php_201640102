<?php

spl_autoload_register(function($className){
    echo $className;
    $filename = $className.".php";
    // echo $filename;

    if(file_exists($filename)){
        require $filename;
    } else{
        echo "nothing";
    }
    
}
);
// spl_autoload_register(매개변수)