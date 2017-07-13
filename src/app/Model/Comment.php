<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Comment extends BaseModel
{
    public $cid;
    public $uid;
    public $mid;
    public $content;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
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
                'content' => 'content',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'deletedby' => 'deletedby',
                'datedeleted' => 'datedeleted',
            ];
    }

    public function initialize() {
        $this->belongsTo('mid', Media::class, 'id', [
            'alias' => Media::class,
        ]);
    }
}