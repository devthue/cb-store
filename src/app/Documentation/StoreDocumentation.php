<?php

/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/14/17
 * Time: 01:00
 */

namespace App\Documentation;

class StoreDocumentation
{
    const ALL_HEADERS = <<<EOD
```
Authorization: Bearer [JWT token]
```
EOD;
    const ALL_PARAMETERS = <<<EOD
Name   | Type    | Description
------ | ------- | -------------
fields | String  | The `fields` parameter allows you to include just the fields you need.
offset | Integer | The `offset` parameter allows you to exclude a given number of the first objects returned from a query. this is commonly used for paging, along with `limit`.
limit  | Integer | The `limit` parameter allows you to limit the amount of objects that are returned from a query. This is commonly used for paging, along with `offset`.
having | Integer | author **Is Equal** 'Jake' **AND** likes **Is Equal** 10
sort   | Integer | The `sort` parameter allows you to order your results by the value of a property. The value can be 1 for ascending sort (lowest first; A-Z, 0-10) or -1 for descending (highest first; Z-A, 10-0).
EOD;
    const ALL_RESPONSE = <<<EOD
```    
{
    "items": [
        {
            "name": "Starfuck Hà Nội",
            "description": "Quán coffee cùi mía nhất Việt Nam",
            "phone": "0906807979",
            "email": "contact@startfuck.com",
            "website": "http://startfuck.com",
            "facebook": "startfuck",
            "instagram": "startfuck",
            "opening": "11AM - 12PM",
            "address": "314 Nguyễn Thị Thập, Hoàng Kiếm, Hà Nội",
            "region": "Việt Nam",
            "latitude": "1",
            "longitude": "1",
            "logopath": "http://2.pik.vn/2017cef1f18c-5912-4372-841e-114de4c57d3f.png",
            "coverpath": "http://2.pik.vn/2017efcf0bd3-5fd4-45e2-a6cf-8e1776bb3558.jpg"
        }
    ]
}
```
EOD;
}