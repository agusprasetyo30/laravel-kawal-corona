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
        // Mengambil data API kawal corona
        // Kemudian di json_decode menjadi json
        // Dan menjadikan collection 
        $suspect = collect(Http::get('https://data.covid19.go.id/public/api/prov.json')->json());
        // $suspect = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());

        // Mengambil data terakhir update
        // Menampung list_data pada API
        // $suspectData = $suspect->flatten();
        $last_date = $suspect['last_date'];
        $list_data = collect($suspect['list_data']);

        $this->getDataCorona(["ac", "csacs"]);
        // dd($list_data->pluck('key')->toArray());
        // dd($list_data->pluck('jenis_kelamin'));
        // dd(collect($suspect['list_data']));
        // dd($suspect->getBody()->getContents());

        return view('corona.index');
    }

    public function getDataCorona()
    {
        return Chartisan::build()
            ->labels(['a', 'a'])
            ->dataset('Jumlah Kasus', [1, 4])
            // ->dataset('Sample 2', [3, 2, 1, 1, 6, 7, 1, 6, 10, 40])
            // ->dataset('Sample 3', [3, 2, 1, 1, 6, 7, 1, 6, 10, 40])
            ->toJSON();
    }
}
