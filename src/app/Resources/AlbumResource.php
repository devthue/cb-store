<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:25
 */

namespace App\Resources;

use App\Controllers\AlbumController;
use App\Model\Album;
use App\Transformers\AlbumTransformer;
use CayBua\Constants\AclRoles;
use CayBua\Api\ApiResource;
use CayBua\Api\ApiEndpoint;

class AlbumResource extends ApiResource
{
    public function initialize()
    {
        $this
            ->name('Album')
            ->model(Album::class)
            ->expectsJsonData()
            ->transformer(AlbumTransformer::class)
            ->handler(AlbumController::class)
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