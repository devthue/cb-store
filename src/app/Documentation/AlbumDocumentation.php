<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/14/17
 * Time: 14:51
 */

namespace App\Documentation;


class AlbumDocumentation
{
    const ALL_HEADERS = <<<EOD

EOD;
    const ALL_PARAMETERS = <<<EOD

EOD;
    const ALL_RESPONSE = <<<EOD

EOD;
    const CREATE_HEADERS = <<<EOD
```
Authorization: Bearer {{token}}
Content-Type: application/json
```
EOD;
    const CREATE_PARAMETERS = <<<EOD
Name   | Type   |   Require  | Default  | Description
------ | ------ | ------- | -------- | -------------
name | `String` | `True` |  | The album name 
slug | `String` |  |  | Slug 
description | `String` |  |  | Description 
EOD;
    const CREATE_RESPONSE = <<<EOD

EOD;


}