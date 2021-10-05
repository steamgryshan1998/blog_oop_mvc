<?php

namespace app\core;

class Application
{
    public Router $router;
    public function __construct()
    {
        //при создании нового объекта класса Application присваиваем свойству $router новый объект класса Router
        $this->router = new Router();
    }

    public function run(){
        return var_dump($_SERVER);
    }
}