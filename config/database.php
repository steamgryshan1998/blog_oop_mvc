<?php

namespace DB;
//Singleton - один из простейших шаблонов проэктирования(простой класс), содержит проверку на то что он содержит единственный экземпляр(объект)
class DB {

    static private $instance;

    static private $db_info = array(//массив с параметрами подключения к БД
        "db_host" => "localhost",
        "db_name" => "php_blog",
        "db_username" => "admin",
        "db_password" => "password",
    );

    public static function __getInstance(): array// array - тип возвращаемого значения функции
    {
        if(empty(self::$instance)){
            self::$instance = self::$db_info;
        }
        return self::$instance;
    }
}
