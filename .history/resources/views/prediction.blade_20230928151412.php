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
            body{
                background-color: #92C020;
            }
            .chart-container{
                display: flex;
                justify-content: space-between;
                margin-top: 20rem;
                background-color: #92C020;
                max-width: 100%;
                height: 90px;

            }
            .apex-charts{
                width: 50%;
            }
            #chart{
                align-items: left;
                padding-left: 20px;
                height: '300px';

            }
        </style>
    </head>

            <body>

            <div class="chart-container">
                <div id="chart" class="apex-charts" dir="ltr"></div>
                <div id="histogram-chart" class="apex-charts" dir="ltr"></div>
            </div>

                    </div>
                            <script>
                                var options = {
                                series: [25, 15, 44, 55, 41, 17],
                                chart: {
                                    width: '100%',
                                    type: 'pie',
                                },
                                labels: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
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
                                    text: "",
                                    },
                                    dataLabels: {
                                    formatter(val, opts) {
                                        const name = opts.w.globals.labels[opts.seriesIndex]
                                        return [name, val.toFixed(1) + 'kw']
                                        }
                                        },
                                        legend: {
                                        show: false
                                        },
                                        };
                                        var chart = new ApexCharts(document.querySelector("#chart"), options);
                                        chart.render();


                            </script>


                            <script>


                                var histogramOptions = {
                                    series: [{
                                        name: 'Histogram Data',
                                        data: [30, 40, 45, 50, 49, 60, 70, 91, 125]
                                    }],
                                    chart: {
                                        width: '100%',
                                        height: '300px',
                                        type: 'bar',
                                        toolbar: {
                                            show: false
                                        }
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                        }
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    xaxis: {
                                        categories: ['Category A', 'Category B', 'Category C', 'Category D', 'Category E', 'Category F', 'Category G', 'Category H', 'Category I']
                                    }
                                };

                                var histogramChart = new ApexCharts(document.querySelector("#histogram-chart"), histogramOptions);
                                histogramChart.render();


                            </script>





            </body>
@endsection


