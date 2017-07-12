<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewProperty extends BaseModel
{
    public $cid;
    public $uid;
    public $id;
    public $name;
    public $description;
    public $displayorder;
    public $ipaddress;
    public $datecreated;
    public $datemodified;

    public function getSource()
    {
        return 'cb_review_property';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'id' => 'id',
                'name' => 'name',
                'description' => 'description',
                'displayorder' => 'displayorder',
                'ipaddress' => 'ipaddress',
                'datecreated' => 'datecreated',
                'datemodified' => 'datemodified',
            ];
    }
}