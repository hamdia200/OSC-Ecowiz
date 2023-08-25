@extends ("menu")
@section('content')
<div class="container">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                                <canvas id="myChart"></canvas>
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
                        var ctx = document.getElementById('myChart').getContext('2d');

                        var data = {
                            labels: [String.fromCharCode(xf109), String.fromCharCode(xf10b), String.fromCharCode(xf10a), String.fromCharCode(xf2dc)],
                            datasets: [{
                                data: [30, 20, 25, 15],
                                backgroundColor: ['red', 'blue', 'green', 'orange'],
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
