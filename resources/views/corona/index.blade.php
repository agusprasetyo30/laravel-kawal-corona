<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <h1>Hallooo</h1>

   <!-- Chart's container -->
   <div id="chart" style="height: 300px;"></div>
   <!-- Charting library -->
   <script src="{{ asset('vendor/laravel-chart/Chart.min.js') }}"></script>
   <!-- Chartisan -->
   <script src="{{ asset('vendor/laravel-chart/chartisan_chartjs.umd.js') }}"></script>
   <!-- Your application script -->
   <script src="{{ asset('vendor/laravel-chart/chartjs-plugin-datalabels.js') }}"></script>
   <script>
      const chart = new Chartisan({
         el: '#chart',
         url: "{{ route('get_data_corona') }}",
            hooks: new ChartisanHooks()
               .colors(['#ECC94B', '#4299E1', '#AAEE11'])
               .legend({ position: 'top' })               
               .datasets(['bar'])
               .responsive()
               .options({
                  options: {
                     title: {
                        display: true,
                        text: 'Daftar Kasus Corona Di Indonesia',
                        fontSize: 20,
                     },
                     tooltips: {
                        mode: 'index',
                        intersect: false
                     },
                     responsive: true,
                     scales: {
                        xAxes: [{
                           ticks: {
                              beginAtZero: true
                           },
                           stacked: false
                        }],
                        yAxes: [{
                           stacked: false,
                           ticks: {
                              beginAtZero: true
                           },
                        }]
                     },
                     plugins: {
                        datalabels: {
                           align: 'end',
                           anchor: 'end',
                           backgroundColor: function(context) {
                              return context.dataset.backgroundColor;
                           },
                           borderRadius: 4,
                           color: 'white',
                           formatter: function(value){
                              return value;
                           }
                        }
                     }
                  }
               }),
      });
   </script>
   
</body>
</html>