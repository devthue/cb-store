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
Authorization: Bearer {{token}}
```
EOD;
    const ALL_PARAMETERS = <<<EOD
Name   | Type    | Description
------ | ------- | -------------
fields | String  | The `fields` parameter allows you to include just the fields you need.
offset | Integer | The `offset` parameter allows you to exclude a given number of the first objects returned from a query. this is commonly used for paging, along with `limit`.
limit  | Integer | The `limit` parameter allows you to limit the amount of objects that are returned from a query. This is commonly used for paging, along with `offset`.
sort   | Integer | The `sort` parameter allows you to order your results by the value of a property. The value can be 1 for ascending sort (lowest first; A-Z, 0-10) or -1 for descending (highest first; Z-A, 10-0).
EOD;
    const ALL_RESPONSE = <<<EOD
```    
{
    "items": [
        {
            "cid": 1,
            "uid": 1,
            "id": 1,
            "name": "The coffee house",
            "description": "The coffee house",
            "phone": "0906807975",
            "email": "contact@thecoffeehouse.com",
            "website": "http://thecoffeehouse.com",
            "facebook": "thecoffeehouse",
            "instagram": "thecoffeehouse",
            "opening": "9AM - 10PM",
            "address": "313 Nguyễn Thị Thập, Quận 7, Hồ Chí Minh",
            "region": "Việt Nam",
            "latitude": 1,
            "longitude": 1,
            "logopath": "http://2.pik.vn/20170b4d353c-2c4d-42e3-b706-fdb918a2b981.jpg",
            "coverpath": "http://2.pik.vn/2017a1d6ed41-dbe4-4bb7-be8a-795da327753f.jpg",
            "displayorder": 1,
            "status": 1,
            "isdeleted": 0,
            "deletedby": 0,
            "ipaddress": 1,
            "datecreated": 1,
            "datemodified": 1,
            "datedeleted": 0
        }
    ]
}
```
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
name | `String` | `True` |  | The name's coffee store 
description | `String` |  |  | The coffee store description 
phone | `String` | `True` |  | Phone number 
email | `String` | `True` |  | Email 
website | `String` |  |  | Website 
facebook | `String` |  |  | Facebook 
instagram | `String` |  |  | Instagram 
opening | `String` |  |  | Opening and Closing 
address | `String` | `True` |  | Address 
region | `String` |  |  | Region 
latitude | `Integer` |  |  | Latitude 
longitude | `Integer` |  |  | Longitude 
logopath | `String` |  |  | Logo path 
coverpath | `String` |  |  | Cover path 
EOD;
    const CREATE_RESPONSE = <<<EOD
```
{
    "result": "OK",
    "item": {
        "cid": 4,
        "uid": 1,
        "id": 9,
        "name": "Fuck Long",
        "description": "",
        "phone": "0906807975",
        "email": "ga9xvn@gmail.com",
        "website": "",
        "facebook": "",
        "instagram": "",
        "opening": "",
        "address": "",
        "region": "",
        "latitude": 0,
        "longitude": 0,
        "logopath": "",
        "coverpath": "",
        "displayorder": 0,
        "status": 0,
        "isdeleted": 0,
        "deletedby": 0,
        "ipaddress": 2130706433,
        "datecreated": 1500005138,
        "datemodified": 1500005138,
        "datedeleted": 0
    }
}
```
EOD;
    const FIND_RESPONSE = <<<EOD
```
{
    "item": {
        "cid": 4,
        "uid": 1,
        "id": 9,
        "name": "Fuck Long",
        "description": "",
        "phone": "0906807975",
        "email": "ga9xvn@gmail.com",
        "website": "",
        "facebook": "",
        "instagram": "",
        "opening": "",
        "address": "",
        "region": "",
        "latitude": 0,
        "longitude": 0,
        "logopath": "",
        "coverpath": "",
        "displayorder": 0,
        "status": 0,
        "isdeleted": 0,
        "deletedby": 0,
        "ipaddress": 2130706433,
        "datecreated": 1500005138,
        "datemodified": 1500005138,
        "datedeleted": 0
    }
}
```
EOD;
    const UPDATE_HEADERS = <<<EOD
```
Authorization: Bearer {{token}}
Content-Type: application/json
```
EOD;
    const UPDATE_PARAMETERS = <<<EOD
Name   | Type   |   Require  | Default  | Description
------ | ------ | ------- | -------- | -------------
name | `String` | `True` |  | The name's coffee store 
description | `String` |  |  | The coffee store description 
phone | `String` | `True` |  | Phone number 
email | `String` | `True` |  | Email 
website | `String` |  |  | Website 
facebook | `String` |  |  | Facebook 
instagram | `String` |  |  | Instagram 
opening | `String` |  |  | Opening and Closing 
address | `String` | `True` |  | Address 
region | `String` |  |  | Region 
latitude | `Integer` |  |  | Latitude 
longitude | `Integer` |  |  | Longitude 
logopath | `String` |  |  | Logo path 
coverpath | `String` |  |  | Cover path 
EOD;

    const UPDATE_RESPONSE = <<<EOD
```
{
    "result": "OK",
    "item": {
        "cid": 4,
        "uid": 1,
        "id": 1,
        "name": "Phúc Long",
        "description": "The coffee house",
        "phone": "0906807975",
        "email": "ga9xvn@gmail.com",
        "website": "http://thecoffeehouse.com",
        "facebook": "thecoffeehouse",
        "instagram": "thecoffeehouse",
        "opening": "9AM - 10PM",
        "address": "313 Nguyễn Thị Thập, Quận 7, Hồ Chí Minh",
        "region": "Việt Nam",
        "latitude": 1,
        "longitude": 1,
        "logopath": "http://2.pik.vn/20170b4d353c-2c4d-42e3-b706-fdb918a2b981.jpg",
        "coverpath": "http://2.pik.vn/2017a1d6ed41-dbe4-4bb7-be8a-795da327753f.jpg",
        "displayorder": 1,
        "status": 1,
        "isdeleted": 0,
        "deletedby": 0,
        "ipaddress": 2130706433,
        "datecreated": 1,
        "datemodified": 1500016616,
        "datedeleted": 0
    }
}
```
EOD;
    const FIND_HEADERS = <<<EOD

EOD;




}