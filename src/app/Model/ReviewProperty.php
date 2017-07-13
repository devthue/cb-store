<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewProperty extends BaseModel
{
    public $cid;
    public $uid;
    public $name;
    public $description;
    public $displayorder;

    public function getSource()
    {
        return 'cb_review_property';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'name' => 'name',
                'description' => 'description',
                'displayorder' => 'displayorder',
            ];
    }

    public function initialize() {
        $this->hasMany('id', ReviewRelTypeProperty::class, 'rpid', [
            'alias' => ReviewRelTypeProperty::class,
        ]);
    }
}