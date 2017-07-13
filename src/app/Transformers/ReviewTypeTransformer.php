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
            'parentid' => (int)$object->parentid,
            'name' => (string)$object->name,
            'description' => (string)$object->description,
        ];
    }

}