<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:30
 */

namespace App\Model;

class Media extends BaseStoreTracking
{
    public $storeid;
    public $albumid;
    public $type;
    public $name;
    public $path;
    public $resourceserver;

    public function columnMap()
    {
        return parent::columnMap() + [
                'storeid' => 'storeid',
                'albumid' => 'albumid',
                'type' => 'type',
                'name' => 'name',
                'path' => 'path',
                'resourceserver' => 'resourceserver',
            ];
    }

}