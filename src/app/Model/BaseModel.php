<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 09/08/2015
 * Time: 17:11
 */

namespace app\Model;


class BaseModel extends \RedBeanPHP\SimpleModel
{

    public $slug;
    public $createdAt;
    public $updatedAt;
}