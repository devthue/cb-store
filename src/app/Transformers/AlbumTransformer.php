<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:47
 */

namespace App\Transformers;

use App\Model\Album;
use PhalconRest\Transformers\Transformer;

class AlbumTransformer extends Transformer
{
    protected $modelClass = Album::class;

    /**
     * @var Album $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'cid' => (Integer) $object->cid,
            'uid' => (Integer) $object->uid,
            'id' => (Integer) $object->id,
            'name' => (String) $object->name,
            'slug' => (String) $object->slug,
            'description' => (String) $object->description,
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