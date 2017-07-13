<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/10/17
 * Time: 10:01
 */

namespace App\Resources;

use App\Controllers\ReviewTypeController;
use App\Model\ReviewType;
use App\Transformers\ReviewTypeTransformer;
use CayBua\Constants\AclRoles;
use CayBua\Api\ApiResource;
use CayBua\Api\ApiEndpoint;

class ReviewTypeResource extends ApiResource
{
    public function initialize()
    {
        $this
            ->name('ReviewType')
            ->model(ReviewType::class)
            ->expectsJsonData()
            ->transformer(ReviewTypeTransformer::class)
            ->handler(ReviewTypeController::class)
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
                ApiEndpoint::get('/tree', 'tree')
                    ->name('tree')
            );
    }
}