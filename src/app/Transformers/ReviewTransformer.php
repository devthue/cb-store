<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 14:57
 */

namespace App\Transformers;

use App\Model\Review;
use PhalconRest\Transformers\Transformer;

class ReviewTransformer extends Transformer
{
    protected $modelClass = Review::class;

    /**
     * @var Review $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'cid' => (Integer) $object->cid,
            'uid' => (Integer) $object->uid,
            'sid' => (Integer) $object->sid,
            'id' => (Integer) $object->id,
            'servicefeedback' => (String) $object->servicefeedback,
            'improvefeedback' => (String) $object->improvefeedback,
            'detail' => (String) $object->detail,
            'displayorder' => (Integer) $object->displayorder,
            'status' => (Integer) $object->status,
            'isdeleted' => (Integer) $object->isdeleted,
            'deletedby' => (Integer) $object->deletedby,
            'ipaddress' => (Integer) $object->ipaddress,
            'datecreated' => (Integer) $object->datecreated,
            'datemodified' => (Integer) $object->datemodified,
            'datedeleted' => (Integer) $object->datedeleted,
        ];
    }
}