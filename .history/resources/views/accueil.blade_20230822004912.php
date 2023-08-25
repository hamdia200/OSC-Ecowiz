@extends ("menu")
@section('content')
<div class="container">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Accueil</title>
    <style>
        .container{
            background-color: #77B5FE;
            max-width: 100%;
            height: 90vh;

        }
        .circle-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 5rem;
        }

        .chart-container {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .notification-container {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .notification {
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
        .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>


    </style>
    <body>
        <h1 style="text-align: center; font-size:xx-large;  ">Ma conso</h1>
        <div class="content">
                <div class="circle-container">
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>

                    </div>
                    <!-- <i class="fas fa-bolt icon-left"></i>
                    <i class="fas fa-snowflake icon-top"></i>
                    <i class="fas fa-tv icon-right"></i>
                    <i class="fas fa-utensils icon-bottom"></i> -->
                </div>

                <div class="notification-container">
                    <div class="notification">
                        <p>Votre chauffe-eau a consommé le plus durant ce mois de septembre.</p>
                    </div>
                    <div class="notification">
                        <p>Si vous continuez ainsi le mois prochain, vous allez consommer 24 kW.</p>
                    </div>
                </div>
        </div>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'doughnut', // Type de graphique (peut être différent selon votre cas)
                        data: {
                            labels: ['Label 1', 'Label 2', 'Label 3'], // Vos étiquettes
                            datasets: [{
                                label: 'Données',
                                data: [10, 20, 30], // Vos données
                                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Couleur de remplissage du graphique
                                borderColor: 'rgba(75, 192, 192, 1)', // Couleur de la bordure du graphique
                                borderWidth: 1
                            }]
                        },
                        options: {
                            plugins: {
                                datalabels: {
                                    anchor: 'center', // Ancrez le texte au centre
                                    align: 'center', // Alignez le texte au centre
                                    formatter: function(value, context) {
                                        return '00kw/000FCFA'; // Texte que vous voulez afficher
                                    },
                                    font: {
                                        size: 14 // Taille de la police du texte
                                    }
                                }
                            }
                        }
                    });
                </script>

    </body>

    </html>
</div>
@endsection
