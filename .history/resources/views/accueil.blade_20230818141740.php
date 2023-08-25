@extends ("menu")
@section('content')
<div class="container">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Accueil</title>
    <style>


        .circle-container{
            position: relative;
            width: 300px;
            height: 300px;
            margin-top: 5rem;
        }
        .notification-container {
            width: 100%;
            margin-top: 20px;


        }
        .chart-container{
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .alert{
            display: inline-block;
            margin: 10px;
            margin-top: 2rem;
            float: right;
        }
        .alert{

        }



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
                    var ctx = document.getElementById('myCustomChart').getContext('2d');
                    var data = {
                        labels: ['<i class="fas fa-laptop"></i>', '<i class="fas fa-tv"></i>', '<i class="fas fa-laptop"></i>', '<i class="fas fa-snowflake"></i>'],
                        datasets: [{
                            data: [30, 20, 25, 15],
                            backgroundColor: [
                                'red',
                                'blue',
                                'green',
                                'orange'
                            ],
                                // hoverBackgroundColor: [
                                // 'url(chemin_vers_image_appareil_1)',
                                // 'url(chemin_vers_image_appareil_2)',
                                // 'url(chemin_vers_image_appareil_3)',
                                // 'url(chemin_vers_image_appareil_4)'
                                // ],
                                borderWidth: 0,
                                hoverBorderWidth: 0
                        }],
                    };

                    var options = {
                        responsive: true,
                        maintainAspectRatio: false,

                    };

                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: data,
                        options: options,
                    });
                </script>
        </div>
    </body>

    </html>
</div>
@endsection
