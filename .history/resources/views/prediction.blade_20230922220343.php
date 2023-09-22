@extends("menu")
@section('content')
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <title>prediction</title>

            <script>
                 var options = {
                series: [25, 15, 44, 55, 41, 17],
                chart: {
                width: '100%',
                type: 'pie',
                },
                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                theme: {
                monochrome: {
                    enabled: true
                }
                },
                plotOptions: {
                pie: {
                    dataLabels: {
                    offset: -5
                    }
                }
                },
                title: {
                text: "Monochrome Pie"
                },
                dataLabels: {
                formatter(val, opts) {
                    const name = opts.w.globals.labels[opts.seriesIndex]
                    return [name, val.toFixed(1) + '%']
                }
                },
                legend: {
                show: false
                }
                };

                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();

            </script>























@endsection


