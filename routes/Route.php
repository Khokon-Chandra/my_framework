<?php


namespace app\routes;


use app\core\Application;

class Route
{
    public static Application $app;
    public function __construct($config)
    {
       self::$app = new Application($config);

    }

    public static function get(string $path, $callback)
    {
        self::$app->router->get($path,$callback);
    }


    public static function post(string $path, $callback)
    {
         self::$app->router->post($path,$callback);
    }

    public static function group(array $array, $param)
    {

    }


    public function runs()
    {
        self::$app->runs();
    }



}