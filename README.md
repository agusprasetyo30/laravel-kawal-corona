# Laravel Kawal Corona (__BASE TEMPLATE ONLY__)

# Clone
* `$ git clone https://github.com/agusprasetyo30/laravel-kawal-corona.git --branch base-template`
* `$ cd laravel-kawal-corona`
* `$ composer update`
* copy `env.example` dan rubah menjadi `.env`, setelah itu konfigurasi database
* `$ php artisan key:generate`
* `$ php artisan serve` jalankan program

# Folder View & Note
  - Untuk Base Template
    ~~~
    views
    ├── example
        ├── index.blade.php       # Untuk menampilkan data
    ├── layouts
        ├── app.blade.php         # Main Layout untuk menampung layout lainnya (Base/Master Template)
        ├── navbar.blade.php      # Untuk menampung data yang berisi menu
    ~~~

  - Note/Keterangan
    - Untuk memanggil/menambahkan data yang terdapat di ``views/layouts/navbar``
    ```php
      // app.blade.php
      @include('layouts.navbar')
    ``` 

    - `@yield()` Sebagai penanda bagian yang akan bersifat dinamis/bisa berubah
    ```php
      // app.blade.php

      @yield('title') // Untuk mengubah dan menambahkan judul/title

      @yield('content') // Untuk mengubah/menambahkan konten (nanti berita ditaruh disini)
    ``` 

    - `@stack()` Digunakan untuk memberikan data sesuai dengan kebutuhan (Biasane aku ngawe CSS & JS di halaman tertentu)

    - `@extends('layouts.app')` Digunakan untuk memanggil BASE TEMPLATE

    - `@section('title', 'isi_dari_title')` Digunakan untuk mengisi data `@yield('title')` yang sudah ditambahkan

    - `@section('content')` Digunakan untuk mengisi data `@yield('content')` yang sudah ditambahkan

# ScreenShot

# Versioning

- 0.0.6
  - Add data province in view & controller
  - Add `customPagination` in Helper to make custom pagination with data API
  - Add Pagination

- 0.0.5
  - Add sub value penambahan for display & tanggal update realtime
  - Add header view
  - add Helpers global
  - add API for `total` & `penambahan`
  - add library/template ADMIN LTE

- 0.0.4
  - Finish Research chart version
  - Add plugin Datalabel Chart

- 0.0.3
  - Add page for chart
  - Research for new laravel chart version

- 0.0.2
  - Add Corona Controller & Install Package for chart

- 0.0.1
  - First Commit Repository __(30 Agustus 2020)__

# Package Use

- Laravel Chart
  - [Laravel Chart](https://charts.erik.cat/)
  - [Chartisan](https://chartisan.dev/)
  - [https://www.chartjs.org/](https://www.chartjs.org/)

- API
  - [https://data.covid19.go.id/public/api/prov.json](https://data.covid19.go.id/public/api/prov.json)
  - [https://data.covid19.go.id/public/api/update.json](https://data.covid19.go.id/public/api/update.json)