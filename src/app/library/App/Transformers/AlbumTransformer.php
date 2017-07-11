<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:47
 */

namespace App\Transformers;

use App\Model\Album;

class AlbumTransformer extends BaseStoreTransformer
{
    protected $modelClass = Album::class;

    /**
     * @var Album $object
     * @return array
     */
    public function transform($object)
    {
        return parent::transform($object) + [
                'name' => (string)$object->name,
                'slug' => (string)$object->slug,
                'description' => (string)$object->description
            ];
    }
}