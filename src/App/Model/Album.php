<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:22
 */

namespace App\Model;

class Album extends BaseStoreTracking
{
    public $name;
    public $slug;
    public $description;

    public function columnMap()
    {
        return parent::columnMap() + [
                'name' => 'name',
                'slug' => 'slug',
                'description' => 'description'
            ];
    }
}