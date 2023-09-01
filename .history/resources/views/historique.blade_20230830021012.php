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
            align-items: ;
            width: 599px;
            height: 49px;
            position: relative;
            margin-top: 12rem;
        }
        .charts{
            width: 594px;
            height: 471px;
            flex-shrink: 0;
            margin-top: 10rem;
            padding-left: 20px;
            padding-right: 20px;
        }

        
    </style>


</head>
<body>


    <div class="container">
        <div class="content">
            <h1 class="text">Energie(Kwh)</h1>
            <div class="charts">
                <canvas id="lineChart"></canvas>
            </div>
        </div>


        <script>

                var ctxL = document.getElementById("lineChart").getContext('2d');
                var myLineChart = new Chart(ctxL, {
                type: 'line',
                data: {
                labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet","Aout","Septembre","Octobre","Novembre","Decembre"],
                datasets: [{
                label: "My First dataset",
                data: [65, 59, 80, 81, 56, 55, 40,50,24,45,16,34],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
                },
                {
                label: "My Second dataset",
                data: [28, 48, 40, 19, 86, 27, 90],
                backgroundColor: [
                    'rgba(0, 137, 132, .2)',
                ],
                borderColor: [
                    'rgba(0, 10, 130, .7)',
                ],
                borderWidth: 2
                }
                ]
            },
            options: {
                responsive: true
            }
            });
        </script>



    </div>
</body>
</html>
@endsection
