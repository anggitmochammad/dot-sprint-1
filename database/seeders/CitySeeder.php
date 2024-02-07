<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    public function run()
    {
        $provinces = Province::all();

        foreach ($provinces as $province) {
            $cities = Http::withHeaders([
                'key' => env('RAJA_ONGKIR_API_KEY')
            ])->get('https://api.rajaongkir.com/starter/city?province=' . $province['id'])->json()['rajaongkir']['results'];

            foreach ($cities as $city) {
                City::create([
                    'province_id'   => $province['id'],
                    'type'          => $city['type'],
                    'name'          => $city['type'] . ' ' . $city['city_name'],
                    'postal_code'   => $city['postal_code'],
                ]);
            }
        }
    }
}
