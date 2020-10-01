<?php
   namespace App\Helpers\API;
   use Illuminate\Support\Facades\Http;

   class CoronaApiUpdate
   {
      public function getAPICorona()
      {
         try {
            //code...
            $suspect = collect(Http::get('https://data.covid19.go.id/public/api/update.json')->json());
         } catch (\Throwable $th) {
            // dd($th->getMessage());
            abort(500, $th->getMessage());
         }
            
         return collect($suspect["update"]);
      }

      /**
       * Undocumented function
       *
       * @return void
       */
      public function getPenambahanDataHarian()
      {
         $data = $this->getAPICorona();

         return collect($data['penambahan']);
      }

      /**
       * Undocumented function
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