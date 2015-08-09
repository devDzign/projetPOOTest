<?php
/**
 * Created by PhpStorm.
 * User: dev-web
 * Date: 09/08/2015
 * Time: 17:31
 */

namespace app\DataFixtures;


class ItemFixtures {

    public function getType()
    {
        return 'item';
    }

    public function getFixtures()
    {
        return array(
            array(
                'title'=>'Kassamen',
                'author'=>'Matoub Lounes',
                'editor'=>'Izem',
                'released'=>'1998',
                'gender'=>'Kabyle',
                'support'=>'CD'
            )
        );
    }
} 