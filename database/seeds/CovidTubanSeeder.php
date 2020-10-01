<?php

use Illuminate\Database\Seeder;
use App\CovidTubanTotal;
use App\CovidTubanPenambahan;


class CovidTubanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kecamatan = [
            'Tuban',
            'Palang',
            'Semanding',
            'Plumpang',
            'Widang',
            'Jenu',
            'Soko',
            'Singgahan',
            'Tambakboyo',
            'Kerek',
            'Parengan',
            'Bancar',
            'Merakurak',
            'Jatirogo',
            'Grabagan',
            'Rengel',
            'Montong',
            'Senori',
            'Bangilan',
            'Kenduruan',
        ];

        echo"[-] Add data kecamatan in process . . . \n";

        for ($i=0; $i < count($kecamatan); $i++) { 
            $covidTubanTotal = new CovidTubanTotal;
            $covidTubanPenambahan = new CovidTubanPenambahan;

            $covidTubanTotal->kecamatan = $kecamatan[$i];
            $covidTubanPenambahan->kecamatan = $kecamatan[$i];

            $covidTubanTotal->save();
            $covidTubanPenambahan->save();
    
            echo"Kecamatan " . $kecamatan[$i] . " add ... \n";

        }

        echo "[+] Add Kecamatan Successfully \n";
    }
}
