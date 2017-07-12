<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Comment extends BaseModel
{
    public $cid;
    public $uid;
    public $mid;
    public $id;
    public $content;
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
        return 'cb_comment';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'mid' => 'mid',
                'id' => 'id',
                'content' => 'content',
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