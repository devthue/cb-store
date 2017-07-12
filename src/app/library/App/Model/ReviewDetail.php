<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class ReviewDetail extends BaseModel
{
    public $cid;
    public $uid;
    public $rid;
    public $rrtpid;
    public $id;

    public function getSource()
    {
        return 'cb_review_detail';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'rid' => 'rid',
                'rrtpid' => 'rrtpid',
                'id' => 'id',
            ];
    }
}