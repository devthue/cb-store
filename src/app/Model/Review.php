<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Review extends BaseModel
{
    public $cid;
    public $uid;
    public $sid;
    public $servicefeedback;
    public $improvefeedback;
    public $detail;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
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
                'servicefeedback' => 'servicefeedback',
                'improvefeedback' => 'improvefeedback',
                'detail' => 'detail',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'deletedby' => 'deletedby',
                'datedeleted' => 'datedeleted',
            ];
    }

    public function initialize() {
        $this->hasMany('id', ReviewDetail::class, 'rid', [
            'alias' => ReviewDetail::class,
        ]);
        $this->belongsTo('sid', Store::class, 'id', [
            'alias' => Store::class,
        ]);
    }
}