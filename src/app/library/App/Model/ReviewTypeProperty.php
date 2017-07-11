<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 11:32
 */

namespace App\Model;

class ReviewTypeProperty extends BaseStoreTracking
{
    public $rtid;
    public $rpid;
    public $isdefault;

    public function getSource()
    {
        return 'cb_review_type_property';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'rtid' => 'rtid',
                'rpid' => 'rpid',
                'isdefault' => 'isdefault'
            ];
    }

    public function initialize() {

        $this->belongsTo('rtid', ReviewType::class, 'id', [
            'alias' => ReviewType::class,
        ]);

        $this->belongsTo('rpid', ReviewProperty::class, 'id', [
            'alias' => ReviewProperty::class,
        ]);
    }
}