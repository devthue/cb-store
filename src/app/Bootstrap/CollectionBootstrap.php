<?php

namespace App\Bootstrap;

use App\Resources\AlbumResource;
use App\Resources\CommentResource;
use App\Resources\MediaResource;
use App\Resources\ReviewResource;
use App\Resources\ReviewTypeResource;
use App\Resources\StoreResource;

use CayBua\BootstrapInterface;

use PhalconRest\Api;

use Phalcon\Config;
use Phalcon\DiInterface;

class CollectionBootstrap extends \CayBua\Bootstrap\CollectionBootstrap implements BootstrapInterface
{
    public function run(Api $api, DiInterface $di, Config $config)
    {
        parent::run($api, $di, $config);
        $api->resource(new StoreResource('/store'));
        $api->resource(new AlbumResource('/store/album'));
        $api->resource(new CommentResource('/store/comment'));
        $api->resource(new MediaResource('/store/media'));
        $api->resource(new ReviewResource('/store/review'));
        $api->resource(new ReviewTypeResource('/store/review/type'));
    }
}