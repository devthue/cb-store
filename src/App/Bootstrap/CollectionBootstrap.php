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

class CollectionBootstrap implements BootstrapInterface
{
    public function run(Api $api, DiInterface $di, Config $config)
    {
        $api->resource(new StoreResource('/store'));
        $api->resource(new AlbumResource('/album'));
        $api->resource(new CommentResource('/comment'));
        $api->resource(new MediaResource('/media'));
        $api->resource(new ReviewResource('/review'));
        $api->resource(new ReviewTypeResource('/reviewtype'));
    }
}