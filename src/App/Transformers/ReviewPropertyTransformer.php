<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 11:29
 */

namespace App\Transformers;


use App\Model\ReviewProperty;

class ReviewPropertyTransformer extends BaseStoreTransformer
{
    protected $modelClass = ReviewProperty::class;

    /**
     * @var ReviewProperty $object
     * @return array
     */
    public function transform($object)
    {
        return parent::transform($object) + [
                'name' => (string)$object->name,
                'description' => (string)$object->description
            ];
    }
}