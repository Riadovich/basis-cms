<?php
/**
 * Basic structure for CMS
 */

//отображение ошибок
ini_set("display_errors",1);
error_reporting(E_ALL);

define("CMS", true);

/*Точка входа*/
define("ENV", 'Cms');

/*Корневая диреткория*/
define("ROOT_DIR", getcwd());

require_once "system/bootstrap.php";
