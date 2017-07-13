<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewType extends BaseModel
{
    public $cid;
    public $uid;
    public $parentid;
    public $name;
    public $description;
    public $displayorder;

    public function getSource()
    {
        return 'cb_review_type';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'parentid' => 'parentid',
                'name' => 'name',
                'description' => 'description',
                'displayorder' => 'displayorder',
            ];
    }

    public function initialize() {
        $this->hasMany('id', ReviewRelTypeProperty::class, 'rtid', [
            'alias' => ReviewRelTypeProperty::class,
        ]);
    }
}