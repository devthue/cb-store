<?php
/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/14/17
 * Time: 15:38
 */

namespace App\Documentation;


class ReviewTypeDocumentation
{
    const CREATE_HEADERS = <<<EOD
```
Authorization: Bearer {{token}}
Content-Type: application/json
```
EOD;
    const CREATE_PARAMETERS = <<<EOD
Name   | Type   |   Require  | Default  | Description
------ | ------ | ------- | -------- | -------------
parentid | `Integer` | `True` | 0 | Parent ID (Review type) 
name | `String` | `True` |  | Name's review 
description | `String` | `True` |  | Description
EOD;
    const CREATE_RESPONSE = <<<EOD

EOD;
    const ALL_HEADERS = <<<EOD
```
Authorization: Bearer {{token}}
```
EOD;
    const ALL_PARAMETERS = <<<EOD

EOD;
    const ALL_RESPONSE = <<<EOD
```
{
    "items": [
        {
            "cid": 1,
            "uid": 1,
            "id": 1,
            "parentid": 0,
            "name": "Đánh giá cà phê",
            "description": "Gốc cà phê",
            "displayorder": 1,
            "ipaddress": 1,
            "datecreated": 1,
            "datemodified": 1
        }
    ]
}
```
EOD;

    const TREE_HEADERS = <<<EOD
```
Authorization: Bearer {{token}}
```
EOD;
    const TREE_RESPONSE = <<<EOD
```
{
    "data": [
        {
            "cid": 1,
            "uid": 1,
            "id": 1,
            "parentid": 0,
            "name": "Đánh giá cà phê",
            "description": "Gốc cà phê",
            "displayorder": 1,
            "ipaddress": 1,
            "datecreated": 1,
            "datemodified": 1,
            "children": [
                {
                    "cid": 1,
                    "uid": 1,
                    "id": 4,
                    "parentid": 1,
                    "name": "LOẠI CÀ PHÊ ĐANG DÙNG",
                    "description": "",
                    "displayorder": 1,
                    "ipaddress": 1,
                    "datecreated": 1,
                    "datemodified": 1,
                    "children": [
                        {
                            "cid": 1,
                            "uid": 1,
                            "id": 5,
                            "parentid": 4,
                            "name": "Cà phê phin",
                            "description": "",
                            "displayorder": 1,
                            "ipaddress": 1,
                            "datecreated": 1,
                            "datemodified": 1,
                            "properties": [
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 1,
                                    "name": "Loại 1",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": true
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 2,
                                    "name": "Loại 2",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 3,
                                    "name": "Loại 3",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 4,
                                    "name": "Loại khác",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 5,
                                    "name": "Không sử dụng",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                }
                            ]
                        },
                        {
                            "cid": 1,
                            "uid": 1,
                            "id": 6,
                            "parentid": 4,
                            "name": "Cà phê máy",
                            "description": "",
                            "displayorder": 1,
                            "ipaddress": 1,
                            "datecreated": 1,
                            "datemodified": 1,
                            "properties": [
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 1,
                                    "name": "Loại 1",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": true
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 2,
                                    "name": "Loại 2",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 3,
                                    "name": "Loại 3",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 4,
                                    "name": "Loại khác",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                },
                                {
                                    "cid": 1,
                                    "uid": 1,
                                    "id": 5,
                                    "name": "Không sử dụng",
                                    "description": "",
                                    "displayorder": 1,
                                    "ipaddress": 1,
                                    "datecreated": 1,
                                    "datemodified": 1,
                                    "isdefault": false
                                }
                            ]
                        }
                    ]
                }
            ]
        },
        {
            "cid": 1,
            "uid": 1,
            "id": 2,
            "parentid": 0,
            "name": "Tình hình quán",
            "description": "Gốc cà phê",
            "displayorder": 1,
            "ipaddress": 1,
            "datecreated": 1,
            "datemodified": 1
        },
        {
            "cid": 1,
            "uid": 1,
            "id": 3,
            "parentid": 0,
            "name": "Khách hàng phản hồi",
            "description": "Gốc cà phê",
            "displayorder": 1,
            "ipaddress": 1,
            "datecreated": 1,
            "datemodified": 1
        }
    ]
}
```
EOD;
    const UPDATE_HEADERS = <<<EOD
```
Authorization: Bearer {{token}}
Content-Type: application/json
```
EOD;

}