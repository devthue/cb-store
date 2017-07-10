<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:25
 */

namespace App\Resources;

use App\Controllers\StoreController;
use App\Model\Store;
use App\Transformers\StoreTransformer;
use CayBua\Constants\AclRoles;
use CayBua\Resources\ApiResource;
use PhalconRest\Api\ApiEndpoint;

class StoreResource extends ApiResource
{
    public function initialize()
    {
        $this
            ->name('Store')
            ->model(Store::class)
            ->expectsJsonData()
            ->transformer(StoreTransformer::class)
            ->handler(StoreController::class)
            ->itemKey('item')
            ->collectionKey('items')
            ->allow(AclRoles::UNAUTHORIZED)
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
                ApiEndpoint::get('/search')
                ->name('search')
            )
        ;
    }
}