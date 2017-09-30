<?php

namespace System;

/**
 * Class System
 * @package System
 * Системный класс
 */
class System
{
    private $di;

    public function __construct($di)
    {
        $this->di = $di;
        $this->route = $this->di->get("router");
    }

    /**
     * стартовый метод
     */
    public function run()
    {
        //подключаем роуты

        //вытаскиваем контроллер исходя из текущего uri

        //вызываем метод контроллера
    }
}