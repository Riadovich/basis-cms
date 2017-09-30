<?php
/**
 * Начальная загрузка
 * Предварительная нагрузка
 */

require_once __DIR__."/../vendor/autoload.php";

use \System\DI\DI;

try{

    $di = new DI();

    $services = require_once __DIR__."/Config/Service.php";

    print_r($services);
    foreach ($services as $service){
        $service = new $service($di);
        $service->init();
    }

    $system = new \System\System($di);
    $system->run();

}
catch (\Exception $ex){
    echo $ex->getMessage();
}