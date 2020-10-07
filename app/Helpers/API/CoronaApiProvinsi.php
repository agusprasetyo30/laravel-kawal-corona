<?php
   namespace App\Helpers\API;
   use Illuminate\Support\Facades\Http;

   class CoronaApiProvinsi
   {
      /**
       * Untuk mengambil data API
       *
       * @return void
       */
      private function getAPICorona()
      {
         $suspect = collect(Http::get('https://data.covid19.go.id/public/api/prov.json')->json());
      
         return $suspect;
      }

      /**
       * Menampung data corona seluruh provinsi
       *
       * @return void
       */
      public function getProvinceData()
      {
         $data = collect($this->getAPICorona()['list_data']);

         return $data;
      }

      /**
       * Untuk mengambil data provinsi dengan key array "key"
       *
       * @return void
       */
      public function getLabelProvinsi()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('key')->toArray();
      }

      /**
       * Untuk mengambil data jumlah kasus per provinsi dengan key array "jumlah_kasus"
       *
       * @return void
       */
      public function getDatasetJumlahKasus()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('jumlah_kasus')->toArray();
      }

      /**
       * Untuk mengambil data jumlah kasus per provinsi dengan key array "jumlah_sembuh"
       *
       * @return void
       */
      public function getDatasetJumlahSembuh()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('jumlah_sembuh')->toArray();
      }

      /**
       * Untuk mengambil data jumlah dirawat per provinsi dengan key array "jumlah_dirawat"
       *
       * @return void
       */
      public function getDatasetJumlahDirawat()
      {
         $data = $this->getAPICorona();

         return collect($data['list_data'])->pluck('jumlah_dirawat')->toArray();
      }
   }
?>