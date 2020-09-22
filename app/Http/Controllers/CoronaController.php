<?php

namespace App\Http\Controllers;

use App\Charts\CoronaChart;
use App\Helpers\API\CoronaApiProvinsi;
use App\Helpers\API\CoronaApiUpdate;
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
        $data = new CoronaApiUpdate();

        $data_total = $data->getUpdateDataTotal();

        // Mengambil data terakhir update
        // Menampung list_data pada API
        // $suspectData = $suspect->flatten();
        // $last_date = $suspect['last_date'];
        // $list_data = collect($suspect['list_data']);

        // dd($list_data->pluck('key')->toArray());
        // dd($list_data->pluck('jenis_kelamin'));
        // dd(collect($suspect['list_data']));
        // dd($suspect->getBody()->getContents());

        return view('corona.index', compact('data_total'));
    }

    public function getDataCorona()
    {
        $data = new CoronaApiProvinsi;

        // dd($data->getDatasetJumlahSembuh(), $data->getLabelProvinsi());
        return Chartisan::build()
            ->labels($data->getLabelProvinsi())
            ->dataset('Jumlah Kasus', $data->getDatasetJumlahKasus())
            ->dataset('Jumlah Sembuh', $data->getDatasetJumlahSembuh())
            // ->dataset('Sample 3', [3, 2, 1, 1, 6, 7, 1, 6, 10, 40])
            ->toJSON();
    }
}
