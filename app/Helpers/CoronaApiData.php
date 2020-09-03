<?php
   namespace App\Helpers;
   use Illuminate\Support\Facades\Http;

   class CoronaApiData
   {
      public function getAPICorona()
      {
         $suspect = collect(Http::get('https://data.covid19.go.id/public/api/prov.json')->json());
      }
   }
?>