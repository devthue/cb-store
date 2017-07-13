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
            'name' => (string)$object->name,
            'slug' => (string)$object->slug,
            'description' => (string)$object->description
        ];
    }
}