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
    const ALL_DESCRIPTION = 'API lấy toàn bộ sanh sách quán cafe đã được tạo.';
    const ALL_PARAMETERS = <<<EOD
Name  | Type | Description
--- | --- | ---
since | string | A timestamp in ISO 8601 format: YYYY-MM-DDTHH:MM:SSZ. Only gists updated at or after this time are returned.
EOD;
    const ALL_RESPONSE = <<<EOD
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
EOD;
}