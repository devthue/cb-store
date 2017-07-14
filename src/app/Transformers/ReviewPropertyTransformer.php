<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 11:29
 */

namespace App\Transformers;

use App\Model\ReviewProperty;
use PhalconRest\Transformers\Transformer;

class ReviewPropertyTransformer extends Transformer
{
    protected $modelClass = ReviewProperty::class;

    /**
     * @var ReviewProperty $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'cid' => (Integer) $object->cid,
            'uid' => (Integer) $object->uid,
            'id' => (Integer) $object->id,
            'name' => (String) $object->name,
            'description' => (String) $object->description,
            'displayorder' => (Integer) $object->displayorder,
            'ipaddress' => (Integer) $object->ipaddress,
            'datecreated' => (Integer) $object->datecreated,
            'datemodified' => (Integer) $object->datemodified,
        ];
    }
}