@extends("menu")
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historiques</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>
<body>


    <div class="container-hist">

        <div class="content">
        <h1 class="text"style="font-size: 1.5rem; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Energie(Kwh)</h1>
            <div class="charts">
                <button class="time-range-button" data-range="24">24 heures</button>
                <button class="time-range-button" data-range="168">7 jours</button>
                <button class="time-range-button" data-range="720">30 jours</button>
                <button class="time-range-button" data-range="2160">3 mois</button>
                <button class="time-range-button" data-range="8640">12 mois</button>
                <canvas id="myChart" style="width:100%;max-width:600px; text-align:left"></canvas>
            </div>
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



    </div>
</body>
</html>
@endsection
