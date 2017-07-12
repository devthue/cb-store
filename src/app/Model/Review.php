<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Review extends BaseModel
{
    public $cid;
    public $uid;
    public $sid;
    public $id;
    public $servicefeedback;
    public $improvefeedback;
    public $detail;
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
        return 'cb_review';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'sid' => 'sid',
                'id' => 'id',
                'servicefeedback' => 'servicefeedback',
                'improvefeedback' => 'improvefeedback',
                'detail' => 'detail',
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