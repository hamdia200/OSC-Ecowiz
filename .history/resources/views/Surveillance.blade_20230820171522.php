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
        .content {
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
        .chart {
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
    <div class="content">
        <div class="left">
        <h2>Sélection Date</h2>
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
                    <option value="02">fevrier</option>
                    <option value="03">mars</option>
                    <option value="04">avril</option>
                    <option value="05">mai</option>
                    <option value="06">juin</option>
                    <option value="07">juillet</option>
        </select>
        <select id="annee">
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
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
            <div class="chart">
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
