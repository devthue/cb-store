<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:28
 */

namespace App\Transformers;

use App\Model\Store;

use PhalconRest\Transformers\Transformer;

class StoreTransformer extends Transformer
{
    protected $modelClass = Store::class;

    /**
     * @var Store $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'cid' => (int) $object->cid,
            'uid' => (int) $object->uid,
            'id' => (int) $object->id,
            'name' => (string) $object->name,
            'description' => (string) $object->description,
            'phone' => (string) $object->phone,
            'email' => (string) $object->email,
            'website' => (string) $object->website,
            'facebook' => (string) $object->facebook,
            'instagram' => (string) $object->instagram,
            'opening' => (string) $object->opening,
            'address' => (string) $object->address,
            'region' => (string) $object->region,
            'latitude' => (int) $object->latitude,
            'longitude' => (int) $object->longitude,
            'logopath' => (string) $object->logopath,
            'coverpath' => (string) $object->coverpath,
            'displayorder' => (int) $object->displayorder,
            'status' => (int) $object->status,
            'isdeleted' => (int) $object->isdeleted,
            'deletedby' => (int) $object->deletedby,
            'ipaddress' => (int) $object->ipaddress,
            'datecreated' => (int) $object->datecreated,
            'datemodified' => (int) $object->datemodified,
            'datedeleted' => (int) $object->datedeleted,
        ];
    }

}