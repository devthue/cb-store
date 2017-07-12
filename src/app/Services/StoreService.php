<?php

/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:31
 */

namespace App\Services;

use App\Model\Store;

class StoreService
{
    /**
     * @param $name
     * @return \Phalcon\Mvc\Model\ResultsetInterface
     */
    public function findWithName($name)
    {
        return Store::find(
            [
                'conditions' => 'name LIKE %:name:%',
                'bind' => [
                    'name' => $name
                ]
            ]
        );
    }

}