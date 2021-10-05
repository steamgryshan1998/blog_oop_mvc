<?php
//    function SumOfDigits($d):int
//    {
//        $d = (string)$d;
//        $arr = str_split($d);
//        $sum = 0;
//        for($x = 0; $x < count($arr); $x++){
//            $sum+=$arr[$x];
//        }
//        return $sum;
//    }
//
//    function LuckyTicket():int
//    {
//        $amount = 0;
//        for($i = 0; $i < 1000; $i++){
//            for($j = 0; $j < 1000; $j++){
//                if(SumOfDigits($i) == SumOfDigits($j)){
//                    $amount++;
//                }
//            }
//        }
//        return $amount;
//    }
//
//    echo LuckyTicket()." Ticketa Lol";

//dirname - функция, возвращающая родительскую директорию файла. __DIR__ - константа, содержащая путь
// к текущему файлу от корня
require_once dirname(__DIR__).'/vendor/autoload.php';
//позволяем использовать класс Application в index.php
use app\core\Application;

$app = new Application();

$app->router->get("/", function (){
    return "Hello world!";
});

//$app->run();


