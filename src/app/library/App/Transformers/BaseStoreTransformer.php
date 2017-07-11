<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 16:05
 */

namespace App\Transformers;

use App\Model\BaseStoreTracking;
use PhalconRest\Transformers\Transformer;

abstract class BaseStoreTransformer extends Transformer
{
    /**
     * @var BaseStoreTracking $object
     * @param $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'id' => (int)$object->id,
            'displayorder' => (int)$object->displayorder,
            'status' => (int)$object->status,
        ];
    }
}