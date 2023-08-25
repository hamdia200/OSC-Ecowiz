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
            }


        </style>
        </head>
        <body>
                <select id="data-type">
                    <option value="jour">Poste de conso par jour</option>
                    <option value="mois">Poste de conso par mois</option>
                    <option value="annee">Poste de conso par année</option>

                </select>
        di
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
                <canvas id="mychart" width="400"  height="400"></canvas>

            </div>

        </body>
    </div>
@endsection
