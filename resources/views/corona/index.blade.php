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

      .nominal-provinsi {
         font-size: 15px;
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

   {{-- Tabel Daftar Positif --}}
   <div class="card">
      <div class="card-header bg-primary">
         <h3 class="card-title">Daftar Provinsi Terdampak</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
         <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
               <th style="width: 10px">#</th>
               <th>Provinsi </th>
               <th>Positif</th>
               <th>Sembuh</th>
               <th>Meninggal</th>
               <th>Dirawat</th>
            </tr>
            </thead>
            <tbody>
               
            @foreach ($data_provinsi as $key => $data)
               <tr>
                     
                  <td>{{ ++$key }}.</td>
                  <td><b>{{ $data['key'] }}</b></td>
                  <td width="150">
                     <b class="nominal-provinsi">{{ convertDecimal($data['jumlah_kasus']) }}</b>
                     <span class="badge bg-warning">+{{ convertDecimal($data['penambahan']['positif']) }}</span>
                  </td>
                  <td width="150">
                     <b class="nominal-provinsi">{{ convertDecimal($data['jumlah_sembuh']) }}</b>
                     <span class="badge bg-success">+{{ convertDecimal($data['penambahan']['sembuh']) }}</span>
                  </td>
                  <td width="150">
                     <b class="nominal-provinsi">{{ convertDecimal($data['jumlah_kasus']) }}</b>
                     <span class="badge bg-danger">+{{ convertDecimal($data['penambahan']['meninggal']) }}</span>
                  </td>
                  <td width="150">
                     <b class="nominal-provinsi">{{ convertDecimal($data['jumlah_dirawat']) }}</b>
                  </td>
                  {{-- <td><span class="badge bg-danger">55%</span></td> --}}
               </tr>
            @endforeach
            </tbody>
         </table>
      </div>
      <!-- /.card-body -->
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