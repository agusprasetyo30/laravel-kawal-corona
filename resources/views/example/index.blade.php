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

<!-- Ini digunaka untuk jenis kategori -->
<div class="container-fluid bg-primary">
   <div class="text-center header-judul">
      Diisi kategori berita boleh banget 
   </div>
</div>

<!-- Ini digunakan untuk isi berita (?) -->
<p>
   Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ea distinctio placeat harum! Veniam sint repellendus hic repudiandae reprehenderit eos accusantium, amet animi quasi commodi!
</p>


@endsection

@push('js')
   <script>
   </script>

@endpush