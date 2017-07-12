<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewMessage extends BaseModel
{
    public $cid;
    public $uid;
    public $id;
    public $name;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $ipaddress;
    public $deletedby;
    public $datecreated;
    public $datemodified;
    public $datedeleted;

    public function getSource()
    {
        return 'cb_review_message';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'id' => 'id',
                'name' => 'name',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'ipaddress' => 'ipaddress',
                'deletedby' => 'deletedby',
                'datecreated' => 'datecreated',
                'datemodified' => 'datemodified',
                'datedeleted' => 'datedeleted',
            ];
    }
}