<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/ion-icon/css/ionicons.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">

   @stack('css')
</head>
<body>
   <div class="container-fluid p-0">
      @yield('content')
   </div>

   <!-- jQuery -->
   <script src="{{ asset('vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- ChartJS -->
   <script src="{{ asset('vendor/adminlte/plugins/chart.js/Chart.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">

   <!-- Charting library -->
   <script src="{{ asset('vendor/laravel-chart/Chart.min.js') }}"></script>
   <!-- Chartisan -->
   <script src="{{ asset('vendor/laravel-chart/chartisan_chartjs.umd.js') }}"></script>
   <!-- Your application script -->
   {{-- <script src="{{ asset('vendor/laravel-chart/chartjs-plugin-datalabels.js') }}"></script> --}}
   @stack('js')

</body>
</html>