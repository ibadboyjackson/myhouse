<?php

namespace App\Http\Controllers\myhouse\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Thiagoprz\HereGeocoder\HereGeocoder;

class AddressController extends Controller
{


    public function address ($lat, $long, $rad, HereGeocoder $geocoder) {

        $adress = $geocoder->reverseGeocode($lat, $long, $rad);

        return [
          'address' => $adress
        ];

    }

}
