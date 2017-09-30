<?php
/**
 * Created by PhpStorm.
 * User: makhmudov
 * Date: 30.09.2017
 * Time: 21:13
 */
namespace System\Service\Router;

use System\Module\Router\Router;
use System\Service\AbstractService;

class Service extends AbstractService
{

    public $serviceName = 'router';

    /**
     * @return mixed
     */
    public function init()
    {
        $router = new Router($_SERVER["HTTP_HOST"]);

        $this->di->set($this->serviceName, $router);
    }
}