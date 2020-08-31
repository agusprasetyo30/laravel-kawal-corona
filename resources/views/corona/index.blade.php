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
   <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
   <!-- Chartisan -->
   <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
   <!-- Your application script -->

   <script>
      const chart = new Chartisan({
         el: '#chart',
         url: "{{ route('get_data_corona') }}",
         hooks: new ChartisanHooks()
            .colors(['#ECC94B', '#4299E1', '#AAEE11'])
            .legend({ position: 'bottom' })
            .beginAtZero()
            .datasets([{ type: 'line', fill: false }, 'bar']),
      });
   </script>
   
</body>
</html>