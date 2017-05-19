<?php

function p($var)
{
    if (is_bool($var)) {
            var_dump($var);
    } elseif (is_null($var)) {
        var_dump(null);
    } else {
        echo "<pre style='position:relative;z-index:1000;padding:10px;border-radius:5px;background:#F5F5F5;border:1px solid #aaa;font-size:14px;line-height:18px;opacity:0.9;'>" . print_r($var, true) . "</pre>";
    }
}

function session_set($name,$value){
    if(!session_id()){
        session_start();
    }
    $_SESSION[$name]=$value;
}

function session_get($name){
    if(!session_id()){
        session_start();
    }
    if(isset($_SESSION[$name])){
        return $_SESSION[$name];
    }else{
        return false;
    }
}



