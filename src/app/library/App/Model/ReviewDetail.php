<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/11/17
 * Time: 11:21
 */

namespace App\Model;

class ReviewDetail extends BaseStoreTracking
{
    public $uid;
    public $cid;
    public $rid;
    public $rtid;
    public $rpid;

    public function getSource()
    {
        return 'cb_review_detail';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'uid' => 'uid',
                'cid' => 'cid',
                'rid' => 'rid',
                'rtid' => 'rtid',
                'rpid' => 'rpid',
            ];
    }
}