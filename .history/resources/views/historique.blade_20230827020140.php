@extends("menu")
@section('content')
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Historique</title>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>
<div class="container">


    <h1>Energie(Kwh)</h1>

    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary" onclick="loadChart('24h')">24 Heures</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('7d')">7 Jours</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('30d')">30 Jours</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('3m')">3 Mois</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('12m')">12 Mois</button>
    </div>

    <div class="chart-container mt-4">
        <canvas id="historiqueChart"></canvas>
    </div>

</div>

<script></script>
var historiqueCtx = document.getElementById('historiqueChart').getContext('2d');
    var historiqueChart;

    function loadChart(period) {
        // Charger les données correspondant à la période depuis la base de données
        // Remplacez ce code par la récupération de vos données

        var labels = []; // Labels pour l'axe X
        var data = [];   // Données pour l'histogramme

        // Remplir les labels et les données en fonction de la période
        if (period === '24h') {
            // Remplir les données pour 24 heures
        } else if (period === '7d') {
            // Remplir les données pour 7 jours
        } else if (period === '30d') {
            // Remplir les données pour 30 jours
        } else if (period === '3m') {
            // Remplir les données pour 3 mois
        } else if (period === '12m') {
            // Remplir les données pour 12 mois
        }

        // Détruire le graphique précédent s'il existe
        if (historiqueChart) {
            historiqueChart.destroy();
        }

        // Créer le nouveau graphique
        historiqueChart = new Chart(historiqueCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: period,
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                // Configurer les options du graphique
            }
        });
    }
</script>

</body>
</html>
