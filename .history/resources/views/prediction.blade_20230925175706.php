@extends("menu")
@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://apexcharts.com/javascript-chart-demos"></script>
            <title>prediction</title>


            <body>
                    <div class="card-body pb-0 pt-3">
                        <div id="financial-technical-partner-contribitions-va"
                            data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger"]'
                            class="apex-charts" dir="ltr">
                        </div>
                    </div>

                    <script>
                            function getChartColorsArray(chartId) {
                            if (document.getElementById(chartId) !== null) {
                            var colors = document.getElementById(chartId).getAttribute("data-colors");
                            if (colors) {
                            colors = JSON.parse(colors);
                            return colors.map(function(value) {
                                var newValue = value.replace(" ", "");
                                if (newValue.indexOf(",") === -1) {
                                    var color = getComputedStyle(document.documentElement).getPropertyValue(
                                        newValue
                                    );
                                    if (color) return color;
                                    else return newValue;
                                } else {
                                    var val = value.split(",");
                                    if (val.length == 2) {
                                        var rgbaColor = getComputedStyle(
                                            document.documentElement
                                        ).getPropertyValue(val[0]);
                                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                                        return rgbaColor;
                                    } else {
                                        return newValue;
                                    }
                                }
                            });
                        } else {
                            console.warn('data-colors atributes not found on', chartId);
                        }
                }
            }

                                var establishmentByMonthAndYear = getChartColorsArray("establishment-by-month-and-year");
                                if (establishmentByMonthAndYear) {
                                    var establishmentByMonthAndYears = @json($establishmentByMonthAndYear);
                                    var establishmentDataKeys = Object.keys(establishmentByMonthAndYears);
                                    var establishmentDataValues = Object.values(establishmentByMonthAndYears);

                                    var options = {
                                        series: [{
                                            name: 'Nombres',
                                            data: establishmentDataValues,
                                        }],
                                        annotations: {
                                            points: [{
                                                x: 'Bananas',
                                                seriesIndex: 0,
                                                label: {
                                                    borderColor: '#775DD0',
                                                    offsetY: 0,
                                                    style: {
                                                        color: '#fff',
                                                        background: '#775DD0',
                                                    },
                                                    text: 'Secteurs',
                                                }
                                            }]
                                        },
                                        chart: {
                                            height: 350,
                                            type: 'bar',
                                        },
                                        plotOptions: {
                                            bar: {
                                                borderRadius: 10,
                                                columnWidth: '50%',
                                            }
                                        },
                                        dataLabels: {
                                            enabled: false
                                        },
                                        stroke: {
                                            width: 2
                                        },
                                        grid: {
                                            row: {
                                                colors: ['#fff', '#f2f2f2']
                                            }
                                        },
                                        xaxis: {
                                            labels: {
                                                rotate: -45
                                            },
                                            categories: establishmentDataKeys,
                                            tickPlacement: 'on'
                                        },
                                        yaxis: {
                                            title: {
                                                text: 'Nombres',
                                            },
                                        },
                                        fill: {
                                            type: 'gradient',
                                            gradient: {
                                                shade: 'light',
                                                type: "horizontal",
                                                shadeIntensity: 0.25,
                                                gradientToColors: undefined,
                                                inverseColors: true,
                                                opacityFrom: 0.85,
                                                opacityTo: 0.85,
                                                stops: [50, 0, 100]
                                            },
                                        },
                                        colors: ['#5e72e4', '#545454'],
                                    };

                                    var establishmentByMonthAndYearChart = new ApexCharts(document.querySelector(
                                        "#establishment-by-month-and-year"), options);
                                    establishmentByMonthAndYearChart.render();
                                }

                        </script>


            </body>




















@endsection


