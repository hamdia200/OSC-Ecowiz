@extends ("menu")
@section('content')
<div class="container">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Accueil</title>
    <style>

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px;
            background-color: #333;
            color: white;
        }

        .circle-container {
            position: relative;
            width: 300px;
            height: 300px;
        }

        .chart-container {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .notification-container {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .notification {
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
    </style>


    </style>
    <body>
            <div class="circle-container">
                <div class="chart-container">
                    <canvas id="myChart"></canvas>
                </div>
                <i class="fas fa-bolt icon-left"></i>
                <i class="fas fa-snowflake icon-top"></i>
                <i class="fas fa-tv icon-right"></i>
                <i class="fas fa-utensils icon-bottom"></i>
            </div>

            <div class="notification-container">
                <div class="notification">
                    <p>Votre chauffe-eau a consommé le plus durant ce mois de septembre.</p>
                </div>
                <div class="notification">
                    <p>Si vous continuez ainsi le mois prochain, vous allez consommer 24 kW.</p>
                </div>
            </div>


                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var data = {
                        labels: ['Chauffe-eau', 'Climatisation', 'Télé', 'Frigo'],
                        datasets: [{
                            data: [30, 20, 25, 15],
                            backgroundColor: ['red', 'blue', 'green', 'orange'],
                        }],
                    };
                    var options = {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: { display: false },
                    };
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: data,
                        options: options,
                    });
                </script>

    </body>

    </html>
</div>
@endsection
