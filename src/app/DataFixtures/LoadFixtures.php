<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 09/08/2015
 * Time: 17:38
 */

require_once __DIR__."/../../../core/bootstrap..php";


$className = $argv[1];
$classFixtures = sprintf("\app\DataFixtures\%sFixtures",ucfirst($className));
$objetFixtures =  new $classFixtures();

$objetFixtures->laodFixtures();





