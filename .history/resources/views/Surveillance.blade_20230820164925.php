@extends("menu")
@section('content')
    <div class="container">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>Surveillance</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .table{
                width: 100%;
                margin-top: 5rem;
                margin-left: 20px;
                padding: 20px;
            }
            .content{
                display: flex;
                flex-direction: row;
                align-items: flex-start;
                justify-content: center;
                width: 80%;
                margin-top: 20px;
            }

            .chart{
                flex: 1;
                margin-top: 3rem;
                text-align: center;
                padding: 20px;
            }
            .alert{
                margin-top: 20px;
                padding: 10px;
                background-color: yellow;
                border: 1px solid #ccc;
                border-radius: 5px;
                float: right;
            }



        </style>
        </head>
        <body>
                <select id="jour">
                    <option value="01">O1</option>
                    <option value="02">O2</option>
                    <option value="03">O3</option>
                    <option value="04">O4</option>
                    <option value="05">O5</option>
                    <option value="06">O6</option>
                    <option value="07">O7</option>


                </select>
                <select id="mois">
                    <option value="01">janvier</option>
                    <option value="02">O2</option>
                    <option value="03">O3</option>
                    <option value="04">O4</option>
                    <option value="05">O5</option>
                    <option value="06">O6</option>
                    <option value="07">O7</option>


                </select>
                <select id="jour">
                    <option value="01">O1</option>
                    <option value="02">O2</option>
                    <option value="03">O3</option>
                    <option value="04">O4</option>
                    <option value="05">O5</option>
                    <option value="06">O6</option>
                    <option value="07">O7</option>


                </select>
        <div class="content">
            <div class="d-flex justify-content-center" style="padding-top: 30px;">
                <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Pourcentage</th>
                                    <th>Kwh</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <td>Switch 1</td>
                                        <td>5%</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Switch 2</td>
                                        <td>10%</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>Switch 3</td>
                                        <td>15%</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Switch 4</td>
                                        <td>20%</td>
                                        <td>60</td>
                                    </tr>
                                    <tr>
                                        <td>Switch 5</td>
                                        <td>25%</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>Switch 6</td>
                                        <td>30%</td>
                                        <td>150</td>
                                    </tr>

                            </tbody>
                    </table>
            </div>
            <div class="chart">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="alert">
            <h1>Alerte <i class="fas fa-bell"></i></h1>
            <p>L'appareil qui a consommé le plus</p>

        </div>
        <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var data = {
                                // labels: ['Chauffe-eau', 'Climatisation', 'Télé', 'Frigo'],
                                datasets: [{
                                    data: [30, 20, 25, 15],
                                    backgroundColor: ['red', 'blue', 'green', 'orange'],
                                }],
                            };
                            var options = {
                                responsive: true,
                                maintainAspectRatio: false,
                                legend: { display: false },
                                plugins: {
                                datalabels: {
                                color: 'white',
                                anchor: 'end',
                                align: 'end',
                                formatter: function(value, context) {
                                    return value + ' kW'; // Format de la valeur
                            }
                            }
                            }
                            };
                            var myChart = new Chart(ctx, {
                                type: 'doughnut',
                                data: data,
                                options: options,
                            });
        </script>
        </body>
    </div>
@endsection
