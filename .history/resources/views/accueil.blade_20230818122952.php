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






            
        </div>
    </body>

    </html>
</div>
@endsection
