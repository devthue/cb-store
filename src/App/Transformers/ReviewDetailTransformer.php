<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/11/17
 * Time: 11:22
 */

namespace App\Transformers;

use App\Model\ReviewDetail;

class ReviewDetailTransformer extends BaseStoreTransformer
{
    protected $modelClass = ReviewDetail::class;

    /**
     * @var ReviewDetail $object
     * @return array
     */
    public function transform($object)
    {
        return parent::transform($object) + [
                'uid' => $object->uid,
                'cid' => $object->cid,
                'rid' => $object->rid,
                'rtid' => $object->rtid,
                'rpid' => $object->rpid,
            ];
    }

}