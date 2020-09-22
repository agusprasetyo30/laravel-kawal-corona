<?php
   namespace App\Helpers\API;
   use Illuminate\Support\Facades\Http;

   class CoronaApiProvinsi
   {
      public function getAPICorona()
      {
         $suspect = collect(Http::get('https://data.covid19.go.id/public/api/prov.json')->json());
      
         return $suspect["total"];
      }

      public function getLabelProvinsi()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('key')->toArray();
      }

      public function getDatasetJumlahKasus()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('jumlah_kasus')->toArray();
      }

      public function getDatasetJumlahSembuh()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('jumlah_sembuh')->toArray();
      }

      public function getDatasetJumlahDirawat()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('jumlah_dirawat')->toArray();
      }
   }
?>