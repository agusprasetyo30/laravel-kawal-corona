@extends('layouts.app')

@section('title', 'Data Covid Se-Indonesia')

@section('content')



<!-- Chart's container -->
{{-- <div id="chart" style="height: 300px;"></div> --}}

@endsection

@push('js')
   {{-- <script>
      const chart = new Chartisan({
         el: '#chart',
         url: "{{ route('get_data_corona') }}",
            hooks: new ChartisanHooks()
               .colors(['#ECC94B', '#4299E1', '#AAEE11'])
               .legend({ position: 'top' })               
               .datasets('bar')
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
                           // backgroundColor: function(context) {
                           //    return context.dataset.backgroundColor;
                           // },
                           borderRadius: 4,
                           color: 'transparent',
                           formatter: function(value){
                              // return value;
                           }
                        }
                     }
                  }
               }),
      });
   </script> --}}
@endpush