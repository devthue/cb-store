<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 14:57
 */

namespace App\Transformers;

use App\Model\Review;
use PhalconRest\Transformers\ModelTransformer;

class ReviewTransformer extends ModelTransformer
{
    protected $modelClass = Review::class;

    /**
     * @var Review $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'sid' => $object->sid,
            'servicefeedback' => $object->servicefeedback,
            'improvefeedback' => $object->improvefeedback,
        ];
    }
}