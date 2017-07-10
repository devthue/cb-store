<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:22
 */

namespace App\Model;

class Comment extends BaseStoreTracking
{
    public $mid;
    public $content;

    public function columnMap()
    {
        return parent::columnMap() + [
                'mid' => 'mid',
                'content' => 'content'
            ];
    }
}