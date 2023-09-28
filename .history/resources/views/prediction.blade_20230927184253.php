@extends("menu")
@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <title>prediction</title>
        <style>

        </style>
    </head>

            <body>

            <div class="card-body pb-0 pt-3">
                <div id="chart" class="apex-charts" dir="ltr"></div>
            </div>

                    </div>
                            <script>

                                var options = {
                                series: [25, 15, 44, 55, 41, 17],
                                chart: {
                                    width: '100%',
                                    height: '300px',
                                    marginLeft: '-100px', // Ajustez la marge gauche ici pour déplacer le graphique vers la gauche
                                    marginTop: '100px',
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



            </body>
@endsection


