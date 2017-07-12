<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewType extends BaseModel
{
    public $cid;
    public $uid;
    public $id;
    public $parentid;
    public $name;
    public $description;
    public $displayorder;
    public $ipaddress;
    public $datecreated;
    public $datemodified;

    public function getSource()
    {
        return 'cb_review_type';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'id' => 'id',
                'parentid' => 'parentid',
                'name' => 'name',
                'description' => 'description',
                'displayorder' => 'displayorder',
                'ipaddress' => 'ipaddress',
                'datecreated' => 'datecreated',
                'datemodified' => 'datemodified',
            ];
    }
}