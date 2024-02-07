<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProvinceSeeder extends Seeder
{
    public function run()
    {
        $provinces = Http::withHeaders([
            'key' => env('RAJA_ONGKIR_API_KEY')
        ])->get('https://api.rajaongkir.com/starter/province')->json()['rajaongkir']['results'];

        foreach ($provinces as $province) {
            Province::updateOrCreate(
                [
                    'province_id'        => $province['province_id'],
                ],
                [
                    'name'               => $province['province'],
                ]
            );
        }
    }
}
