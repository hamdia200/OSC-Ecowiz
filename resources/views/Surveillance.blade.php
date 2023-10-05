@extends("menu")
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surveillance</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">

    <style>
        /* Vos styles CSS ici */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #C9D6F4;
            flex-direction: row; /* Changez flex-direction en row */
        }

        .tableau-graphique {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start; /* Aligner les éléments en haut */
            margin-top: 50px;
        }

        .tableau {
            border: 2px red solid;
            width: 48%; /* Réduisez la largeur pour laisser de l'espace pour le graphique */
            height: 400px;
            flex-shrink: 0;
            padding-left: 20px;
        }
        .container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        margin-top: 10px;
    }

    .chart {
        position: relative;
        width: 350.994px;
        height: 350.994px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-left: 20px;
        padding-right: 20px;
    }

    .alert {
        margin-top: 15px;
        padding: 10px;
        background: var(--color, #ffffff);
        border: 1px solid #ccc;
        border-radius: 30px;
        float: right;
    }

    .md-form.md-outline {
        position: relative;
        overflow-y: auto;
        box-sizing: border-box;
        margin-top: 5rem;
    }

    .input-prefix {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 10px;
    }

    .chif {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        font-size: 12px;
    }

        .graph {
            width: 48%; /* Réduisez la largeur pour laisser de l'espace pour le tableau */
            padding-left: 20px;
            padding-right: 20px;
        }

        /* Autres styles CSS existants... */
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="tableau-graphique">
                <div class="tableau">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Pourcentage</th>
                                <th>Consommation (kWh)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($initialData['initialData'] as $data)
                            <tr>
                                <td>{{ $data['equipment_name'] }}</td>
                                <td>{{ $data['pourcentage'] }}%</td>
                                <td>{{ $data['consumption'] }} kWh</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="graph">
                    <div class="chart">
                        <canvas id="myChart"></canvas>
                        <div class="chif">
                                <!-- Affichez la consommation totale ici -->
                            <h1 style="font-size: 19px; color: var(--primary, #1758EC);">
                                {{ number_format($consommationTotale, 2) }} kWh
                            </h1>
                            <h1 style="font-size: 19px; color: var(--primary, #1758EC);">
                                {{ number_format($consommationTotale *88) }} FCFA
                            </h1>
                        </div>
                    </div>
                    <div class="alert">
                        <h1>Alertes<i class="fas fa-bell" style="width: 50px; height: 50px; padding-left:50px; padding-right:50px;color:#C52B2B"></i></h1>
                        <p>L'appareil qui a consommé le plus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vos scripts JavaScript ici -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script>
        var j = $.noConflict();
    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
                        // Vos scripts JavaScript ici
                        function updateRealtimeConsumption() {
                            $.ajax({
                                url: '/fetch-realtime-consumption', // L'URL de la route qui renvoie les données en temps réel
                                method: 'GET',
                                dataType: 'json',
                                success: function (data) {
                                    data.forEach(function (row) {
                                        // Sélectionnez la cellule correspondante dans le tableau
                                        const equipmentNameCell = $(`#realtime-consumption-${row.equipment_id}-name`);
                                        const pourcentageCell = $(`#realtime-consumption-${row.equipment_id}-pourcentage`);
                                        const consumptionCell = $(`#realtime-consumption-${row.equipment_id}-consumption`);

                                        // Mettez à jour le texte des cellules avec les nouvelles données
                                        equipmentNameCell.text(row.equipment_name);
                                        pourcentageCell.text(`${row.pourcentage}%`);
                                        consumptionCell.text(`${row.consumption} kWh`);
                                    });
                                },
                                error: function (xhr, status, error) {
                                    console.error('Erreur lors de la récupération des données en temps réel:', error);
                                }
                            });
                        }

                        // Mettez à jour les données toutes les 5 secondes (5000 ms)
                        setInterval(updateRealtimeConsumption, 5000);

    </script>

    <script>
                // Créez le graphique au chargement de la page
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [], // Laissez ceci vide, nous le mettrons à jour avec les données
                    datasets: [{
                        data: [], // Laissez ceci vide, nous le mettrons à jour avec les données
                        backgroundColor: [], // Laissez ceci vide, nous le mettrons à jour avec les couleurs
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        },
                    }
                }
            });

            // Fonction pour mettre à jour le graphique
            function updateChart() {
                $.ajax({
                    url: '/fetch-chart-data', // La route pour récupérer les données du graphique
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        // Récupérez les données du graphique depuis la réponse JSON
                        const labels = data.labels;
                        const values = data.values;

                        // Mettez à jour le graphique avec les nouvelles données
                        myChart.data.labels = labels;
                        myChart.data.datasets[0].data = values;

                        // Utilisez des couleurs statiques ou générez des couleurs aléatoires pour les tranches du graphique
                        const backgroundColor = generateRandomColors(labels.length);
                        myChart.data.datasets[0].backgroundColor = backgroundColor;

                        myChart.update();
                    },
                    error: function (xhr, status, error) {
                        console.error('Erreur lors de la récupération des données du graphique :', error);
                    }
                });
            }

            // Mettez à jour le graphique au chargement de la page
            updateChart();

            // Rafraîchissez le graphique lorsque vous récupérez de nouvelles données
            setInterval(updateChart, 10000); // Mettez à jour toutes les 5 secondes (5000 ms)

            // Fonction pour générer des couleurs aléatoires
            function generateRandomColors(count) {
                const colors = [];
                for (let i = 0; i < count; i++) {
                    const color = '#' + (Math.random() * 0xFFFFFF << 0).toString(16).padStart(6, '0');
                    colors.push(color);
                }
                return colors;
            }

     </script>
</body>
</html>
@endsection
