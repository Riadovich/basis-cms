<?php
/**
 * Created by PhpStorm.
 * User: makhmudov
 * Date: 30.09.2017
 * Time: 21:02
 */

namespace System\Service;

use System\DI\DI;

abstract class AbstractService
{

    protected $di;


    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}