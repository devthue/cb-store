<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:29
 */

namespace App\Transformers;

use App\Model\ReviewType;
use PhalconRest\Transformers\Transformer;

class ReviewTypeTransformer extends Transformer
{
    protected $modelClass = ReviewType::class;

    /**
     * @var ReviewType $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'cid' => (Integer) $object->cid,
            'uid' => (Integer) $object->uid,
            'id' => (Integer) $object->id,
            'parentid' => (Integer) $object->parentid,
            'name' => (String) $object->name,
            'description' => (String) $object->description,
            'displayorder' => (Integer) $object->displayorder,
            'ipaddress' => (Integer) $object->ipaddress,
            'datecreated' => (Integer) $object->datecreated,
            'datemodified' => (Integer) $object->datemodified,
        ];
    }

}