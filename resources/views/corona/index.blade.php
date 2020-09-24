@extends('layouts.app')

@section('title', 'Data Covid Se-Indonesia')

@push('css')
   <style>
      .header-judul {
         font-family: 'Times New Roman', Times, serif;
         padding: 50px;
         font-size: 35px;
      }
      
      .tanggal {
         font-size: 18px;
         font-weight: bold;
      }
   </style>
@endpush

@section('content')

<div class="container-fluid bg-primary">
   <div class="text-center header-judul">
      Peta Sebaran
   </div>
</div>

<div class="container mt-3 mb-3">
   <h3 class="font-weight-bold">Jumlah Kasus di Indonesia Saat Ini</h3>
   <div class="row">
      <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-info">
            <div class="inner">
               
               <h3>{{ convertDecimal($data_total['jumlah_positif']) }}</h3>
               
               <h6 class="font-weight-bold">TERKONFIRMASI</h6>
               <h6 class="font-weight-bold">+{{ $data_penambahan['jumlah_positif'] }} Kasus Positif</h6>

            </div>
            <div class="icon">
               <i class="ion ion-plus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-success">
            <div class="inner">
               <h3>{{ convertDecimal($data_total['jumlah_dirawat']) }}</h3>
               
               <h6 class="font-weight-bold">KASUS AKTIF</h6>
               <h6 class="font-weight-bold">+{{ $data_penambahan['jumlah_dirawat'] }} Jumlah Dirawat</h6>

            </div>
            <div class="icon">
               <i class="ion ion-medkit"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-warning">
            <div class="inner">
               <h3>{{ convertDecimal($data_total['jumlah_sembuh']) }}</h3>
               
               <h6 class="font-weight-bold">SEMBUH</h6>
               <h6 class="font-weight-bold">+{{ $data_penambahan['jumlah_sembuh'] }} Kasus Sembuh</h6>

            </div>
            <div class="icon">
               <i class="ion ion-ios-bell"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-danger">
            <div class="inner">
               <h3>{{ convertDecimal($data_total['jumlah_meninggal']) }}</h3>
               
               <h6 class="font-weight-bold">MENINGGAL</h6>
               <h6 class="font-weight-bold">+{{ $data_penambahan['jumlah_meninggal'] }} Kasus Meninggal</h6>
            </div>
            <div class="icon">
               <i class="ion ion-minus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
   <!-- ./col -->
   </div>

   <label class="font-weight-light m-0" style="font-size: 11px">Pembaruan Terakhir</label>
   <p class="tanggal">{{ convertTanggal($data_penambahan['tanggal']) }}</p>
</div>

@endsection

@push('js')
   <script>
      // $('.count').each(function () {
      //       $(this).prop('Counter', 0).animate({
      //          Counter: $(this).text()
      //       }, {
      //       duration: 3000,
      //       easing: 'swing',
      //       step: function (now) {
      //             $(this).text(Math.ceil(now));
      //       }
      //    });
      // });
   </script>

@endpush