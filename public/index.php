<?php
    //подключаем файл с скомпилированными(после composer install) параметрами автозагрузки; dirname() - возвращает имя
    // родительского каталога, __DIR__ - содержит путь к текущему файлу от корня
    require dirname(__DIR__).'/vendor/autoload.php';

    //подключаем пространство имен, где реализован класс для подключения к БД
    use DB\DB;

    //создаем новый объект класса DB
    $db1 = new DB();
    //получаем доступ к методу __getInstance класса DB
    var_dump($db1->__getInstance());



