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
    public $logoid;
    public $name;
    public $description;
    public $phone;
    public $email;
    public $website;
    public $facebook;
    public $workdaystart;
    public $workdayend;
    public $address;
    public $region;
    public $latitude;
    public $longitude;

    public function columnMap()
    {
        return parent::columnMap() + [
                'logoid' => 'logoid',
                'name' => 'name',
                'description' => 'description',
                'phone' => 'phone',
                'email' => 'email',
                'website' => 'website',
                'facebook' => 'facebook',
                'workdaystart' => 'workdaystart',
                'workdayend' => 'workdayend',
                'address' => 'address',
                'region' => 'region',
                'latitude' => 'latitude',
                'longitude' => 'longitude'

            ];
    }
}