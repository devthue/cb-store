<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/7/17
 * Time: 16:12
 */

namespace App\Model;

class ReviewProperty extends BaseStoreTracking
{
    public $name;
    public $description;

    public function getSource()
    {
        return 'cb_review_property';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'name' => 'name',
                'description' => 'description'
            ];
    }

    public function initialize()
    {
        $this->hasMany('id', ReviewTypeProperty::class, 'rpid', [
            'alias' => ReviewTypeProperty::class,
        ]);
    }
}