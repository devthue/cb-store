<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:28
 */

namespace App\Transformers;

use App\Model\Store;

class StoreTransformer extends BaseStoreTransformer
{
    protected $modelClass = Store::class;

    /**
     * @var Store $object
     * @return array
     */
    public function transform($object)
    {
        return parent::transform($object) + [
                'logoid' => $object->logoid,
                'name' => $object->name,
                'description' => $object->description,
                'phone' => $object->phone,
                'email' => $object->email,
                'website' => $object->website,
                'facebook' => $object->facebook,
                'workdaystart' => $object->workdaystart,
                'workdayend' => $object->workdayend,
                'address' => $object->address,
                'region' => $object->region,
                'latitude' => $object->latitude,
                'longitude' => $object->longitude,
            ];
    }

}