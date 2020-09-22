@extends('layouts.app')

@section('title', 'Data Covid Se-Indonesia')

@section('content')

<div class="container mt-3 mb-3">
   <h3 class="font-weight-bold">Jumlah Kasus di Indonesia Saat Ini</h3>
   <div class="row">
      <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-info">
            <div class="inner">
               
               <h3 class="count">{{ convertDecimal($data_total['jumlah_positif']) }}</h3>
               
               <p>TERKONFIRMASI</p>
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
               <h3 class="count">{{ convertDecimal($data_total['jumlah_dirawat']) }}</h3>
               
               <p>KASUS AKTIF</p>
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
               <h3 class="count">{{ convertDecimal($data_total['jumlah_sembuh']) }}</h3>
               
               <p>SEMBUH</p>
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
               <h3 class="count">{{ convertDecimal($data_total['jumlah_meninggal']) }}</h3>
               
               <p>MENINGGAL</p>
            </div>
            <div class="icon">
               <i class="ion ion-minus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
      </div>
   <!-- ./col -->
   </div>
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