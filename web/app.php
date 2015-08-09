<?php

require_once __DIR__."/../core/bootstrap..php";
use RedBeanPHP\Facade as R;

/**
 * @var $item \app\Model\Item
 */
$item = R::dispense('item');

$item->title = 'mon item';
R::store($item);