@extends ("menu")
@section('content')
<div class="container">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Accueil</title>
    <style>
        .notifications{
            margin-top: 3rem;
            text-align: right;
        }

        .content{
            margin-top: 5rem;
            height: auto;
            float: left;
        }

    </style>
    <body>
        <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="content">
                                <canvas id="myCustomChart"></canvas>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-3">
                        <div class="notifications">
                            <h2>Notifications</h2>
                            <ul id="notificationList">
                                <h1> Si vous continuez dans le mois d'Août </h1> <h1> vous aurez 24/kw de consommation </h1>
                            </ul>
                        </div>
                    </div>
                </div>






                <script>
            var ctx = document.getElementById('myCustomChart').getContext('2d');

            var data = {
                labels: ['Appareil 1', 'Appareil 2', 'Appareil 3', 'Appareil 4'],
                datasets: [{
                    data: [30, 20, 25, 15],
                    backgroundColor: [
                        'transparent', // Vous pouvez laisser cette couleur transparente
                        'transparent',
                        'transparent',
                        'transparent'
                    ],
                    hoverBackgroundColor: [
                        'url(chemin_vers_image_appareil_1)',
                        'url(chemin_vers_image_appareil_2)',
                        'url(chemin_vers_image_appareil_3)',
                        'url(chemin_vers_image_appareil_4)'
                    ],
                    borderWidth: 0,
                    hoverBorderWidth: 0
                }],
            };

            var options = {
                responsive: true,
                maintainAspectRatio: false,
                cutoutPercentage: 80,
                legend: {
                    display: false
                }
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
