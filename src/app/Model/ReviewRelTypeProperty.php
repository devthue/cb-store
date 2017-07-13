<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewRelTypeProperty extends BaseModel
{
    public $cid;
    public $uid;
    public $rtid;
    public $rpid;
    public $displayorder;
    public $isdefault;

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
                'displayorder' => 'displayorder',
                'isdefault' => 'isdefault',
            ];
    }

    public function initialize() {
        $this->hasMany('id', ReviewDetail::class, 'rrtpid', [
            'alias' => ReviewDetail::class,
        ]);
        $this->belongsTo('rpid', ReviewProperty::class, 'id', [
            'alias' => ReviewProperty::class,
        ]);
        $this->belongsTo('rtid', ReviewType::class, 'id', [
            'alias' => ReviewType::class,
        ]);
    }
}