<?php
   namespace App\Helpers\API;
   use Illuminate\Support\Facades\Http;

   class CoronaApiUpdate
   {
      /**
       * Untuk mengambil data API
       *
       * @return void
       */
      public function getAPICorona()
      {
         try {
            $suspect = collect(Http::get('https://data.covid19.go.id/public/api/update.json')->json());
         
            return collect($suspect["update"]);

         } catch (\Throwable $th) {
            abort(500, $th->getMessage());
         }

      }

      /**
       * Mengambil data array key "penambahan" untuk mengambil data penambahan perhari
       *
       * @return void
       */
      public function getPenambahanDataHarian()
      {
         $data = $this->getAPICorona();

         return collect($data['penambahan']);
      }

      /**
       * Mengambil data array key "total" untuk mengambil data total keseluruhan
       *
       * @return void
       */
      public function getUpdateDataTotal()
      {
         $data = $this->getAPICorona();

         return collect($data['total']);
      }
   }

?>