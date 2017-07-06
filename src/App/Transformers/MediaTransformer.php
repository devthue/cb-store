<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:29
 */

namespace App\Transformers;

use App\Model\Media;

class MediaTransformer extends BaseStoreTransformer
{
    protected $modelClass = Media::class;

    /**
     * @var Media $object
     * @return array
     */
    public function transform($object)
    {
        return parent::transform($object) + [
                'storeid' => $object->storeid,
                'albumid' => $object->albumid,
                'type' => $object->type,
                'name' => $object->name,
                'path' => $object->path,
                'resourceserver' => $object->resourceserver,
            ];
    }

}