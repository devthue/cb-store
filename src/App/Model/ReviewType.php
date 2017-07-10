<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 09:50
 */

namespace App\Model;

class ReviewType extends BaseStoreTracking
{
    public $parentid;
    public $name;
    public $description;

    public function getSource()
    {
        return 'cb_review_type';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'parentid' => 'parentid',
                'name' => 'name',
                'description' => 'description'
            ];
    }

    public function initialize()
    {
        $this->hasMany('id', ReviewTypeProperty::class, 'rtid', [
            'alias' => ReviewTypeProperty::class,
        ]);
    }

}