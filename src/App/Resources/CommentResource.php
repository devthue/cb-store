<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:25
 */

namespace App\Resources;

use App\Controllers\CommentController;
use App\Model\Comment;
use App\Transformers\CommentTransformer;
use CayBua\Constants\AclRoles;
use CayBua\Resources\ApiResource;
use PhalconRest\Api\ApiEndpoint;

class CommentResource extends ApiResource
{
    public function initialize()
    {
        $this
            ->name('Comment')
            ->model(Comment::class)
            ->expectsJsonData()
            ->transformer(CommentTransformer::class)
            ->handler(CommentController::class)
            ->itemKey('item')
            ->collectionKey('items')
            ->deny(AclRoles::UNAUTHORIZED)
            ->allow(AclRoles::USER)
            ->endpoint(
                ApiEndpoint::all()
            )
            ->endpoint(
                ApiEndpoint::find()
            )
            ->endpoint(
                ApiEndpoint::create()
            )
            ->endpoint(
                ApiEndpoint::update()
            )
        ;
    }
}