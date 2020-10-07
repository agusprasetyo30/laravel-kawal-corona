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
        $data_api_update = new CoronaApiUpdate();

        // Mengambil data total
        $data_total = $data_api_update->getUpdateDataTotal();

        // Mengambil data penambahan data harian corona
        $data_penambahan = $data_api_update->getPenambahanDataHarian();

        // Instansiasi untuk mengambil data corona per provinsi
        $data_api_provinsi = new CoronaApiProvinsi;

        // Jumlah data yang akan ditampilkan
        $number_pagination = 15;

        // Mengambil data provinsi berdasarkan fungsi yang dibuat di helpers
        // dan merubah menjadi pagination sesuai permintaan
        $data_provinsi = customPaginate($data_api_provinsi->getProvinceData(), $number_pagination);

        // dd($data_provinsi);

        // dd($data_provinsi->pluck('penambahan'));
        return view('corona.index', compact('data_total', 'data_penambahan', 'data_provinsi'));
    }

    public function getDataCorona()
    {
        $data = new CoronaApiProvinsi;

        // dd($data->getDatasetJumlahSembuh(), $data->getLabelProvinsi());
        // return Chartisan::build()
        //     ->labels($data->getLabelProvinsi())
        //     ->dataset('Jumlah Kasus', $data->getDatasetJumlahKasus())
        //     ->dataset('Jumlah Sembuh', $data->getDatasetJumlahSembuh())
            // ->dataset('Sample 3', [3, 2, 1, 1, 6, 7, 1, 6, 10, 40])
            // ->toJSON();
    }
}
