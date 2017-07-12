<?php

namespace App\Model;

use CayBua\Model\BaseModel;

class Store extends BaseModel
{
    public $cid;
    public $uid;
    public $id;
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
    public $displayorder;
    public $status;
    public $isdeleted;
    public $deletedby;
    public $ipaddress;
    public $datecreated;
    public $datemodified;
    public $datedeleted;

    public function getSource()
    {
        return 'cb_store';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
                'cid' => 'cid',
                'uid' => 'uid',
                'id' => 'id',
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
                'coverpath' => 'coverpath',
                'displayorder' => 'displayorder',
                'status' => 'status',
                'isdeleted' => 'isdeleted',
                'deletedby' => 'deletedby',
                'ipaddress' => 'ipaddress',
                'datecreated' => 'datecreated',
                'datemodified' => 'datemodified',
                'datedeleted' => 'datedeleted',
            ];
    }
}