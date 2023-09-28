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

    <style>
        body{
            background-color: #C9D6F4;
        }
        .container{
            background: var(--color, #C9D6F4);
            background-color: #C9D6F4;
            max-width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .text{
            border-radius: 10px;
            border-style: solid;
            border-color: gray;
            border-width: 0.1px;
            text-align: center;
            width: 599px;
            height: 49px;
            position: absolute;
            margin-top: 10rem;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            padding: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }
        .charts{
            width: 600px;
            height: 571px;
            flex-shrink: 0;
            margin-top: 20rem;
            padding-left: 20px;
            padding-right: 20px;
            left: 0;
            top: 0;
            position: absolute;
            z-index: 1;
        }
        .content{


        }
        .time-range-button{
            border-radius: 10px;
            border: 1px solid rgba(23, 88, 236, 0.72);
            background: var(--Color, #FFF);
        }


    </style>


</head>
<body>


    <div class="container">

        <div class="content">
        <h1 class="text"style="font-size: 1.5rem; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Energie(Kwh)</h1>
            <div class="charts">
                <button class="time-range-button" data-range="24">24 heures</button>
                <button class="time-range-button" data-range="168">7 jours</button>
                <button class="time-range-button" data-range="720">30 jours</button>
                <button class="time-range-button" data-range="2160">3 mois</button>
                <button class="time-range-button" data-range="8640">12 mois</button>
                <canvas id="myChart" style="width:100%;max-width:600px; text-align:left;"></canvas>
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
