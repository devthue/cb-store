<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Album extends BaseModel
{
    public $cid;
    public $uid;
    public $name;
    public $slug;
    public $description;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
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
                'name' => 'name',
                'slug' => 'slug',
                'description' => 'description',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'deletedby' => 'deletedby',
                'datedeleted' => 'datedeleted',
            ];
    }

    public function initialize() {
        $this->hasMany('id', Media::class, 'aid', [
            'alias' => Media::class,
        ]);
    }
}