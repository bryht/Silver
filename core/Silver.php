<?php

namespace core;

class Silver
{

    public $model;
    public $assign;

    public static $classMap = array();

    public static function run()
    {

        $requestPara = array();
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $requestPara = $_GET;
        } else if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $requestPara = $_POST;
        }
        
        $route = new Route();
        $control = new $route->control($requestPara);
        $action = $route->action;
        $control->$action($requestPara);
    }

    public static function load($class)
    {
        $class=str_replace('\\','/',$class);
        //p('LOAD:'.SILVER . $class . '.php');
        if (isset($classMap[$class])) {
            return true;
        } else {
            if (is_file(SILVER . $class . '.php')) {
                include SILVER . $class . '.php';
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}
