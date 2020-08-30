<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoronaController extends Controller
{
    public function chart()
    {
        // Mengambil data API kawal corona
        // Kemudian di json_decode menjadi json
        // Dan menjadikan collection 
        $suspect = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());

        // Menghilangkan 1 level key attribute untuk mempermudal
        // Dalam hal ini menghilangkan key attribute "attributes"
        dd($suspect->flatten(1));

        // dd($suspect->getBody()->getContents());
    }
}
