@extends("menu")
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historiques</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .container{
            background: var(--color, #C9D6F4);
            background-color: #C9D6F4;
            max-width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .text{
            border-radius: 10px;
            border-style: solid;
            border-color:gray;
            border-width: 0.1px;
            text-align: center;
            width: 599px;
            height: 49px;
            position: absolute;
            margin-top: 12rem;
        }
        .charts{
            width: 600px;
            height: 571px;

            margin-top: 20rem;

            float: left;
        }
        .content_chart{


        }




    </style>


</head>
<body>


    <div class="container">
        <div class="content_chart">
            <h1 class="text">Energie(Kwh)</h1>
            <div class="charts">
            <canvas id="myChart" style="width:100%;max-width:600px; text-align:left"></canvas>
            </div>
        </div>



        <script>
                var dateValues = ["2023-08-01", "2023-08-02", "2023-08-03", "2023-08-04", "2023-08-05","2023-08-05","2023-08-05"];
                var yValues = [55, 49, 44, 24, 15,24,45];
                var barColors = ['#EE0B0B', '#7963CD', '#63CD81','#5BC7E6','#FF8F78','#BB0B0B','#7F00FF'];

                new Chart("myChart", {
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
                    displayFormats:{
                        day:"MM DD"
                    }
                    }
                }
                });

        </script>



</div>
</body>
</html>
@endsection
