<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:25
 */

namespace App\Resources;

use App\Controllers\MediaController;
use App\Model\Media;
use App\Transformers\MediaTransformer;
use CayBua\Constants\AclRoles;
use CayBua\Resources\ApiResource;
use PhalconRest\Api\ApiEndpoint;

class MediaResource extends ApiResource
{
    public function initialize()
    {
        $this
            ->name('Media')
            ->model(Media::class)
            ->expectsJsonData()
            ->transformer(MediaTransformer::class)
            ->handler(MediaController::class)
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