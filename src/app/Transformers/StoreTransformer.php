<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:28
 */

namespace App\Transformers;

use App\Model\Store;

class StoreTransformer extends Trans
{
    protected $modelClass = Store::class;

    /**
     * @var Store $object
     * @return array
     */
    public function transform($object)
    {
        return parent::transform($object) + [
                'name' => $object->name,
                'description' => $object->description,
                'phone' => $object->phone,
                'email' => $object->email,
                'website' => $object->website,
                'facebook' => $object->facebook,
                'instagram' => $object->instagram,
                'opening' => $object->opening,
                'address' => $object->address,
                'region' => $object->region,
                'latitude' => $object->latitude,
                'longitude' => $object->longitude,
                'logopath' => $object->logopath,
                'coverpath' => $object->coverpath
            ];
    }

}