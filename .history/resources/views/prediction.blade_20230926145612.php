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
                        
                    </div>



                    <script>
                            document.addEventListener("DOMContentLoaded", function () {
                            var dateValues = ["2023-08-01", "2023-08-02", "2023-08-03", "2023-08-04", "2023-08-05","2023-08-05","2023-08-05"];
                            var yValues = [55, 49, 44, 24, 15,24,45];
                            var barColors = ['#EE0B0B', '#7963CD', '#63CD81','#5BC7E6','#FF8F78','#BB0B0B','#7F00FF'];

                            var ctx = document.getElementById("myChart").getContext("2d");
                            var chart = new Chart(ctx, {
                                type: "bar",
                                data: {
                                    labels: dateValues,
                                    datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    title: {
                                        display: true,
                                        displayFormats: {
                                            day: "MM DD"
                                        }
                                    }
                                }
                            });

                            var timeRangeButtons = document.querySelectorAll(".time-range-button");
                            timeRangeButtons.forEach(function (button) {
                                button.addEventListener("click", function () {
                                    var range = parseInt(this.getAttribute("data-range"));
                                    var newData = generateDataForTimeRange(range);
                                    chart.data.datasets[0].data = newData;
                                    chart.update();
                                });
                            });
                            function generateDataForTimeRange(hours) {

                            }
                        });




                </script>




                    <!-- <script>

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

                        </script> -->


            </body>




















@endsection


