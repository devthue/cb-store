<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:25
 */

namespace App\Resources;

use App\Controllers\StoreController;
use App\Documentation\StoreDocumentation;
use App\Model\Store;
use App\Transformers\StoreTransformer;

use CayBua\Constants\AclRoles;
use CayBua\Api\ApiResource;
use CayBua\Api\ApiEndpoint;

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
            ->deny(AclRoles::UNAUTHORIZED)
            ->allow(AclRoles::USER)
            ->endpoint(
                ApiEndpoint::create()
                    ->setExampleHeaders(StoreDocumentation::CREATE_HEADERS)
                    ->setExampleParameters(StoreDocumentation::CREATE_PARAMETERS)
                    ->exampleResponse(StoreDocumentation::CREATE_RESPONSE)
            )
            ->endpoint(
                ApiEndpoint::update()
                    ->setExampleParameters(StoreDocumentation::UPDATE_PARAMETERS)
                ->exampleResponse(StoreDocumentation::UPDATE_RESPONSE)
                ->setExampleHeaders(StoreDocumentation::UPDATE_HEADERS)
            )
            ->endpoint(
                ApiEndpoint::all()
                    ->setExampleHeaders(StoreDocumentation::ALL_HEADERS)
                    ->setExampleParameters(StoreDocumentation::ALL_PARAMETERS)
                    ->exampleResponse(StoreDocumentation::ALL_RESPONSE)
            )
            ->endpoint(
                ApiEndpoint::find()
                ->exampleResponse(StoreDocumentation::FIND_RESPONSE)
            );
    }
}