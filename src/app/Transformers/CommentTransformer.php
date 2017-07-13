<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:29
 */

namespace App\Transformers;


use App\Model\Comment;
use PhalconRest\Transformers\Transformer;

class CommentTransformer extends Transformer
{
    protected $modelClass = Comment::class;

    /**
     * @var Comment $object
     * @return array
     */
    public function transform($object)
    {

        return [
            'mid' => $object->mid,
            'content' => $object->content
        ];
    }
}