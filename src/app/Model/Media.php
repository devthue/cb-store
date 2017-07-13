<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Media extends BaseModel
{
    public $cid;
    public $uid;
    public $sid;
    public $aid;
    public $fileextension;
    public $name;
    public $path;
    public $resourceserver;
    public $commentcount;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
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
                'fileextension' => 'fileextension',
                'name' => 'name',
                'path' => 'path',
                'resourceserver' => 'resourceserver',
                'commentcount' => 'commentcount',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'deletedby' => 'deletedby',
                'datedeleted' => 'datedeleted',
            ];
    }

    public function initialize() {
        $this->hasMany('id', Comment::class, 'mid', [
            'alias' => Comment::class,
        ]);
        $this->belongsTo('aid', Album::class, 'id', [
            'alias' => Album::class,
        ]);
        $this->belongsTo('sid', Store::class, 'id', [
            'alias' => Store::class,
        ]);
    }
}