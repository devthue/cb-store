<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:23
 */

namespace App\Model;

use CayBua\Model\BaseModel;

abstract class BaseStoreTracking extends BaseModel
{
    public $cid;
    public $creatorid;
    public $id;
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
    public $datedeleted;

    public function columnMap()
    {
        return [
            'cid' => 'cid',
            'creatorid' => 'creatorid',
            'id' => 'id',
            'displayorder' => 'displayorder',
            'status' => 'status',
            'isdeleted' => 'isdeleted',
            'deletedby' => 'deletedby',
            'datedeleted' => 'datedeleted',
        ];
    }
}