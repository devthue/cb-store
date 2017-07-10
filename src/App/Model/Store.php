<?php

/**
 * Created by PhpStorm.
 * User: BangDinh
 * Date: 7/6/17
 * Time: 15:21
 */

namespace App\Model;

class Store extends BaseStoreTracking
{
    public $name;
    public $description;
    public $phone;
    public $email;
    public $website;
    public $facebook;
    public $instagram;
    public $opening;
    public $address;
    public $region;
    public $latitude;
    public $longitude;
    public $logopath;
    public $coverpath;

    public function columnMap()
    {
        return parent::columnMap() + [
                'name' => 'name',
                'description' => 'description',
                'phone' => 'phone',
                'email' => 'email',
                'website' => 'website',
                'facebook' => 'facebook',
                'instagram' => 'instagram',
                'opening' => 'opening',
                'address' => 'address',
                'region' => 'region',
                'latitude' => 'latitude',
                'longitude' => 'longitude',
                'logopath' => 'logopath',
                'coverpath' => 'coverpath'
            ];
    }
}