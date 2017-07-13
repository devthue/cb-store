<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewMessage extends BaseModel
{
    public $cid;
    public $uid;
    public $name;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
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
                'name' => 'name',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'deletedby' => 'deletedby',
                'datedeleted' => 'datedeleted',
            ];
    }

    public function initialize() {
    }
}