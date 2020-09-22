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
?>