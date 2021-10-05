<?php

//объявляем пространство имен класса Router(включает пространство имен из autoload в composer.json) и директорию,
//где находится сам класс
namespace app\core;

//объявляем класс Router(наш маршрутизатор)
class Router
{
    //protected - модификатор доступа, позволяющий методам и потомкам родительского класса наследоваться потомком,
    //но не другим классам извне
    protected array $routes = [
        '/' => ''
    ];
    public function get($path, $callback){
        $this->routes[$path] = $callback;
    }
}