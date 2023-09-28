@extends("menu")
@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://apexcharts.com/javascript-chart-demos"></script>
        <title>prediction</title>
    </head>

            <body>
                    <div class="container">
                        <div class="content">
                            <div class="">
                                <h1 class="text"style="font-size: 1.5rem; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">Prediction</h1>
                                <canvas id="myChart" style="width:90px;max-width:600px; text-align:left;"></canvas>
                            </div>

                            <div class="anneau">
                                <canvas id=chart ></canvas>
                            </div>

                        </div>

                


                    </div>


            </body>
@endsection


