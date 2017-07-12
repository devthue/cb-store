<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewRelTypeProperty extends BaseModel
{
    public $cid;
    public $uid;
    public $rtid;
    public $rpid;
    public $id;
    public $displayorder;
    public $isdefault;
    public $ipaddress;
    public $datecreated;
    public $datemodified;

    public function getSource()
    {
        return 'cb_review_rel_type_property';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'rtid' => 'rtid',
                'rpid' => 'rpid',
                'id' => 'id',
                'displayorder' => 'displayorder',
                'isdefault' => 'isdefault',
                'ipaddress' => 'ipaddress',
                'datecreated' => 'datecreated',
                'datemodified' => 'datemodified',
            ];
    }
}