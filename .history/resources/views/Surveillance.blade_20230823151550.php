@extends("menu")
    @section('content')

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
            <title>Surveillance</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    background-color: #C9D6F4;
                }
                .table{
                    border: 2px red solid;
                    width: 500px;
                    height: 400px;
                    flex-shrink: 0;
                    padding-left: 10px;
                }
                table >  * {
                    padding : 12px  ;
                }

                .container{
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-between;
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
                    background: var(--color, #ffffff);
                    border: 1px solid #ccc;
                    border-radius: 20px;
                    float: right;
                }
                .date-selection{
                    border-radius: 6px;
                    padding: 10px;
                    display: flex;
                    flex-direction: row;
                    gap: 10px;
                    align-items: center;
                    justify-content: center;
                    width: 245px;
                    height: 45px;
                    position: absolute;
                    left: 337px;
                    top: 203px;
                    padding-left:50px ;
                    padding-right: 50px;

                }
                .poste{
                    text-align: center;
                    margin-top: 20px;
                }
                select{
                    padding: 5px;
                    font-size: 14px;
                    margin-right: 5px;
                }
                .text{
                    color: #000000;
                    text-align: left;
                    font: 500 16px "Montserrat", sans-serif;
                    position: relative;

                }

            </style>
                <script>
                    $('.datepicker').datepicker({
                    ok: '',
                    clear: 'Clear selection',
                    close: 'Cancel'
                    })
                </script>
            </head>
            <body>
                <div class="container">
                    <div>
                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true"><i class="fas fa-calendar input-prefix"></i>
                        <input placeholder="Select date" type="text" id="example" class="form-control">
                    </div>

                    <div class="tableau d-flex justify-content-center" style="padding-top: 110px;">

                        <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Pourcentage</th>
                                            <th>FCFA/Kwh</th>
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

                            <div class="graph">
                                <div class="chart">
                                    <canvas id="myChart"></canvas>
                                </div>

                                <div class="alert">
                                        <h1>Alerte <i class="fas fa-bell" style="width: 50px; height: 50px; padding-left:50px; padding-right:50px;color:#C52B2B"></i></h1>
                                        <p>L'appareil qui a consommé le plus</p>

                                    </div>
                            </div>

                </div>
            <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var data = {
                                    // labels: ['Chauffe-eau', 'Climatisation', 'Télé', 'Frigo'],
                                    datasets: [{
                                        data: [30, 20, 25, 15,30,50,45],
                                        backgroundColor: ['#EE0B0B', '#7963CD', '#63CD81','#5BC7E6','#FF8F78','#BB0B0B','#7F00FF'],
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


                        //  selecteur de date
                                var selectJour = document.getElementById("jour");
                                var selectMois = document.getElementById("mois");
                                var selectAnnee = document.getElementById("annee");

                                //   Écoutez l'événement "change" sur chaque élément <select>
                                selectJour.
                                selectJ
                                addEventListener("change", afficherDate);
                                selectMois.
                                selectMo
                                addEventListener("change", afficherDate);
                                selectAnnee.addEventListener("change", afficherDate);

                                //   Fonction pour afficher la date sélectionnée
                                function afficherDate() {
                                var jourSelectionne = selectJour.value;
                                var moisSelectionne = selectMois.value;
                                var anneeSelectionnee = selectAnnee.value;

                                console.log("Date sélectionnée : " + jourSelectionne + "/" + moisSelectionne + "/" + anneeSelectionnee);
                            }


            </script>
            </body>

    @endsection
