<?php

namespace App\Http\Controllers;

use App\Charts\CoronaChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Chartisan\PHP\Chartisan;

class CoronaController extends Controller
{
    public function chart()
    {
        $a = Chartisan::build()
            ->labels(['A', 'B', 'CC'])
            ->dataset('Sample', [1, 2, 3, 4, 6, 1, 10, 500, 4, 30])
            ->dataset('Sample 2', [3, 2, 1, 1, 6, 7, 1, 6, 10, 40])->toJSON();

        // dd($a);
        // Mengambil data API kawal corona
        // Kemudian di json_decode menjadi json
        // Dan menjadikan collection 
        // $suspect = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());

        // Menghilangkan 1 level key attribute untuk mempermudal
        // Dalam hal ini menghilangkan key attribute "attributes"
        // $suspectData = $suspect->flatten(1);

        // dd($coronaChart);
        // dd($suspect->getBody()->getContents());

        return view('corona.index');
    }

    public function getDataCorona()
    {
        
        return Chartisan::build()
            ->labels(['A', 'B', 'CC', 'a', 'a', 'a', 's', 'f', 'f', '1'])
            ->dataset('Sample', [1, 2, 3, 4, 6, 1, 10, 50, 4, 30])
            ->dataset('Sample 2', [3, 2, 1, 1, 6, 7, 1, 6, 10, 40])
            ->toJSON();
    }
}
