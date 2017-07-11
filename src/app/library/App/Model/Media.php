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
    public $sid;
    public $aid;
    public $fileextension;
    public $name;
    public $path;
    public $resourceserver;
    public $commentcount;

    public function columnMap()
    {
        return parent::columnMap() + [
                'sid' => 'sid',
                'aid' => 'aid',
                'fileextension' => 'fileextension',
                'name' => 'name',
                'path' => 'path',
                'resourceserver' => 'resourceserver',
                'commentcount' => 'commentcount',
            ];
    }

}