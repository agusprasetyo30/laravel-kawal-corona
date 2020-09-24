<?php
   if (!function_exists('convertDecimal')) {
      /**
       * mengkonversi nomer/nilai uang menjadi nilai rupiah
      *
      * @param [int] $value
      * @return void
      */
      function convertDecimal($value)
      {
         return number_format($value, 0, ".", ",");  
      }
   }

   if (!function_exists('convertBulan')) {
      /**
       * untuk mengkonversi bulan
      *
      * @param [type] $nomorBulan
      * @return void
      */
      function convertBulan($nomorBulan) 
      {
         if ($nomorBulan == 1) {
            return 'Januari';
         } else if ($nomorBulan == 2) {
            return 'Pebruari';
         } else if ($nomorBulan == 3) {
            return 'Maret';
         } else if ($nomorBulan == 4) {
            return 'April';
         } else if ($nomorBulan == 5) {
            return 'Mei';
         } else if ($nomorBulan == 6) {
            return 'Juni';
         } else if ($nomorBulan == 7) {
            return 'Juli';
         } else if ($nomorBulan == 8) {
            return 'Agustus';
         } else if ($nomorBulan == 9) {
            return 'September';
         } else if ($nomorBulan == 10) {
            return 'Oktober';
         } else if ($nomorBulan == 11) {
            return 'Nopember';
         } else if ($nomorBulan == 12) {
            return 'Desember';
         }
      }
   }

   if (!function_exists('convertTanggal')) {
      /**
       * Untuk diugunakan conversi tanggal dengan format tanggal - bulan - tahun
       *
       * @param [type] $tanggal
       * @return void
       */
      function convertTanggal($tanggal) 
      {

         $convert_tanggal = date('d', strtotime($tanggal));
         $convert_bulan = convertBulan(date('m', strtotime($tanggal)));
         $convert_tahun = date('Y', strtotime($tanggal));
         
         return $convert_tanggal . ' ' . $convert_bulan . ' ' . $convert_tahun;
      }
   }
?>