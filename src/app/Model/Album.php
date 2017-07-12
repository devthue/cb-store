<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Album extends BaseModel
{
    public $cid;
    public $uid;
    public $id;
    public $name;
    public $slug;
    public $description;
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
        return 'cb_album';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'id' => 'id',
                'name' => 'name',
                'slug' => 'slug',
                'description' => 'description',
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