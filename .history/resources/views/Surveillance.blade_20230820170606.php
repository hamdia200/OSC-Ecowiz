@extends("menu")
@section('content')
<div class="container">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disposition Parfaite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        }
        .container {
        display: flex;
        align-items: flex-start;
        width: 80%;
        margin: auto;
        }
        .left {
        flex: 1;
        padding: 20px;
        }
        .right {
        flex: 1;
        padding: 20px;
        }
        .datatable {
        width: 100%;
        border-collapse: collapse;
        }
        .datatable th, .datatable td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        }
        .datatable th {
        background-color: #f2f2f2;
        }
        .chart-container {
        text-align: center;
        }
        .alert {
        margin-top: 20px;
        padding: 10px;
        background-color: #ffcc00;
        border: 1px solid #e6b800;
        border-radius: 5px;
        text-align: center;
        }
  </style>
</head>
<body>
    <div class="container">
        <div class="left">
        <h2>Sélection Date</h2>
        <select id="jour">
            <!-- Options pour le jour -->
        </select>
        <select id="mois">
            <!-- Options pour le mois -->
        </select>
        <select id="annee">
            <!-- Options pour l'année -->
        </select>

        <h2>DataTable</h2>
        <table class="datatable">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Pourcentage</th>
                <th>kWh</th>
            </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
        </div>
        <div class="right">
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>
        <div class="alert">
            <i class="fas fa-bell"></i>
            Ceci est une notification importante!
        </div>
        </div>
    </div>

    <script>
        // Code JavaScript pour initialiser le graphique avec Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
        type: 'doughnut', // Type de graphique en forme de cercle
        data: {
            labels: ['Label 1', 'Label 2', 'Label 3'],
            datasets: [{
            data: [30, 50, 20],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        },
        options: {
            // Options de configuration du graphique
        }
        });

        // Remplir les options des sélecteurs de date
        var jours = document.getElementById('jour');
        var mois = document.getElementById('mois');
        var annees = document.getElementById('annee');

        for (var i = 1; i <= 31; i++) {
        var option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        jours.appendChild(option);
        }

        for (var i = 1; i <= 12; i++) {
        var option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        mois.appendChild(option);
        }

        var anneeActuelle = new Date().getFullYear();
        for (var i = anneeActuelle; i >= anneeActuelle - 10; i--) {
        var option = document.createElement('option');
        option.value = i;
        option.textContent = i;
        annees.appendChild(option);
        }

        </script>
        </body>
    </div>
@endsection
