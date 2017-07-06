<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:29
 */

namespace App\Transformers;


use App\Model\Comment;

class CommentTransformer extends BaseStoreTransformer
{
    protected $modelClass = Comment::class;

    /**
     * @var Comment $object
     * @return array
     */
    public function transform($object)
    {

        return parent::transform($object) + [
                'storeid' => $object->storeid,
                'content' => $object->content
            ];
    }
}