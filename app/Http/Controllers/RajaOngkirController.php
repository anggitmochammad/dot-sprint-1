<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityIndexRequest;
use App\Http\Requests\ProvinceIndexRequest;
use App\Http\Resources\CityResponse;
use App\Http\Resources\ProvinceResponse;
use App\Models\City;
use App\Models\Province;

class RajaOngkirController extends Controller
{
    public function provinceIndex(ProvinceIndexRequest $request)
    {
        $province = Province::find($request['id']);
        return ProvinceResponse::make($province);
    }

    public function cityIndex(CityIndexRequest $request)
    {
        $city = City::find($request['id']);
        return CityResponse::make($city->load('province'));
    }
}
