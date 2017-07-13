<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:29
 */

namespace App\Transformers;

use App\Model\Media;
use PhalconRest\Transformers\Transformer;

class MediaTransformer extends Transformer
{
    protected $modelClass = Media::class;

    /**
     * @var Media $object
     * @return array
     */
    public function transform($object)
    {
        return [
            'sid' => $object->sid,
            'aid' => $object->aid,
            'fileextension' => $object->fileextension,
            'name' => $object->name,
            'path' => $object->path,
            'resourceserver' => $object->resourceserver,
            'commentcount' => $object->commentcount,
        ];
    }

}