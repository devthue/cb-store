<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/7/17
 * Time: 16:11
 */

namespace App\Model;

class Review extends BaseStoreTracking
{
    public $sid;
    public $servicefeedback;
    public $improvefeedback;

    public function getSource()
    {
        return 'cb_review';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'sid' => 'sid',
                'servicefeedback' => 'servicefeedback',
                'improvefeedback' => 'improvefeedback',
            ];
    }
}