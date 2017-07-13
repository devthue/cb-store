<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:25
 */

namespace App\Resources;

use App\Controllers\ReviewController;
use App\Model\Review;
use App\Transformers\ReviewTransformer;
use CayBua\Constants\AclRoles;
use CayBua\Api\ApiResource;
use CayBua\Api\ApiEndpoint;

class ReviewResource extends ApiResource
{
    public function initialize()
    {
        $this
            ->name('Review')
            ->model(Review::class)
            ->expectsJsonData()
            ->transformer(ReviewTransformer::class)
            ->handler(ReviewController::class)
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
            ->endpoint(
                ApiEndpoint::remove()
            )
        ;
    }
}