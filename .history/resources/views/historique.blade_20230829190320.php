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
            background: var(--color, #ffffff);background-color;
        }
    </style>


</head>
<body>


    <div class="container">

        <h1 c>Energie(Kwh)</h1>
            <div class="row d-flex justify-content-center mt-5">

                <!--Grid column-->
                <div class="col-md-10">

                <canvas id="lineChart"></canvas>

                </div>
                <!--Grid column-->

            </div>


        <script>

            var ctxL = document.getElementById("lineChart").getContext('2d');
            var gradientFill = ctxL.createLinearGradient(0, 0, 0, 290);
            gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
            gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
            var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                {
                    label: "My First dataset",
                    data: [0, 65, 45, 65, 35, 65, 0],
                    backgroundColor: gradientFill,
                    borderColor: [
                    '#AD35BA',
                    ],
                    borderWidth: 2,
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(173, 53, 186, 0.1)",
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
