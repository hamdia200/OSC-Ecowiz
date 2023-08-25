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
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .circle-container{
            margin-top: 5rem;
            height: auto;
            float: left;
        }
        .notification-container {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .alert {
            display: inline-block;
            margin: 0 10px;
        }

    </style>
    <body>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="circle-container">
                                    <div class="chart-container">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <i class="fas fa-bolt icon-left"></i>
                                    <i class="fas fa-bell icon-right"></i>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="notifications-container">
                                <div class="alert">Notifications
                                    <i class="fas fa-bell"></i>
                                    <p> Si vous continuez dans le mois d'Août </p> <p> vous aurez 24/kw de consommation </p>
                                </div>

                                <div class="notifications2">
                                    <i class="fas fa-bell"></i>
                                        <p> Votre chauffe a consommé </p> <p> le plus durant ce mois de septembre </p>
                                <div>

                            </div>
                        </div>
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
