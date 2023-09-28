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
            }
        </style>
    </head>

            <body>

            <div class="chart-container">
                <div id="chart" class="apex-charts" dir="ltr"></div>
                <div id="histogram-chart" class="apex-charts" dir="ltr"></div>
                <div id="area" class="apex-charts" dir="ltr"></div>
            </div>

                    </div>
                            <script>
                                var options = {
                                series: [25, 15, 44, 55, 41, 17],
                                chart: {
                                    width: '100%',
                                    height: '300px',
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

                            <script>

                                    var chartArea = new ApexCharts(document.querySelector('#area'), optionsArea);
                                    chartArea.render();

                                    var optionsBar = {
                                    chart: {
                                        type: 'bar',
                                        height: 380,
                                        width: '100%',
                                        stacked: true,
                                    },
                                    plotOptions: {
                                        bar: {
                                        columnWidth: '45%',
                                        }
                                    },
                                    colors: colorPalette,
                                    series: [{
                                        name: "Clothing",
                                        data: [42, 52, 16, 55, 59, 51, 45, 32, 26, 33, 44, 51, 42, 56],
                                    }, {
                                        name: "Food Products",
                                        data: [6, 12, 4, 7, 5, 3, 6, 4, 3, 3, 5, 6, 7, 4],
                                    }],
                                    labels: [10,11,12,13,14,15,16,17,18,19,20,21,22,23],
                                    xaxis: {
                                        labels: {
                                        show: false
                                        },
                                        axisBorder: {
                                        show: false
                                        },
                                        axisTicks: {
                                        show: false
                                        },
                                    },
                                    yaxis: {
                                        axisBorder: {
                                        show: false
                                        },
                                        axisTicks: {
                                        show: false
                                        },
                                        labels: {
                                        style: {
                                            colors: '#78909c'
                                        }
                                        }
                                    },
                                    title: {
                                        text: 'Monthly Sales',
                                        align: 'left',
                                        style: {
                                        fontSize: '18px'
                                        }
                                    }

                                    }
                            </script>



            </body>
@endsection


