<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 09/08/2015
 * Time: 17:38
 */

require_once __DIR__."/../../../core/bootstrap..php";
use \RedBeanPHP\Facade as R;


$itemFixtures =  new \app\DataFixtures\ItemFixtures();

$type = $itemFixtures->getType();
$Fixtures = $itemFixtures->getFixtures();

foreach($Fixtures as $fixture)
{
    $item = R::dispense($type);
    /**
     * hydrater l'objet Item
     */
    foreach($fixture as $property => $value)
    {
        $item->$property = $value;
    }
    /**
     * Persister en BD
     */
    R::store($item);
}

