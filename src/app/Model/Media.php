<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Media extends BaseModel
{
    public $cid;
    public $uid;
    public $sid;
    public $aid;
    public $id;
    public $fileextension;
    public $name;
    public $path;
    public $resourceserver;
    public $commentcount;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
    public $ipaddress;
    public $datecreated;
    public $datemodified;
    public $datedeleted;

    public function getSource()
    {
        return 'cb_media';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'sid' => 'sid',
                'aid' => 'aid',
                'id' => 'id',
                'fileextension' => 'fileextension',
                'name' => 'name',
                'path' => 'path',
                'resourceserver' => 'resourceserver',
                'commentcount' => 'commentcount',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'deletedby' => 'deletedby',
                'ipaddress' => 'ipaddress',
                'datecreated' => 'datecreated',
                'datemodified' => 'datemodified',
                'datedeleted' => 'datedeleted',
            ];
    }
}