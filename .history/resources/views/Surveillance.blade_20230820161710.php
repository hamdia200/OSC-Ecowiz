@extends("menu")
@section('content')
    <div class="container">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Surveillance</title>
        <style>
            .table{
                width: 100%;
                margin-top: 5rem;
                margin-left: 20px;
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
            }
            .alert{
                margin-top: 20px;
                padding: 10px;
                background-color: yellow;
                border: 1px solid #ccc;
                border-radius: 5px;
                float: right;
            }
            .alert h


        </style>
        </head>
        <body>
                <select id="data-type">
                    <option value="jour">Poste de conso par jour</option>
                    <option value="mois">Poste de conso par mois</option>
                    <option value="annee">Poste de conso par année</option>

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
            <h1>Alerte</h1>
            <p>L'appareil qui a consommé le plus</p>

        </div>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                // labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
                datasets: [{
                label: 'Exemple de données',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
                }]
            },
            options: {
                // Options de configuration du graphique
            }
            });
        </script>
        </body>
    </div>
@endsection
