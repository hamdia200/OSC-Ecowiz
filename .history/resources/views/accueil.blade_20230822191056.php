@extends ("menu")
@section('content')
<div class="container">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Accueil</title>
    <style>
        .body{
            display: flex;
        }
        .container{
            background-color: #C9D6F4;
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
            position: relative;
            width: 449.994px;
            height: 449.994px;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            border: 1px solid #ddd;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 10px;
            background: #C9D6F4;
            box-shadow: 0px 2px 2px 1px rgba(0, 0, 0, 0.25);
        }
        .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .icon{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            gap: 20px;
        }
        .icon  img{
            margin: 10px 0;
        }
        .chiffre {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            }


    </style>


    </style>
    <body>
        <h1 style="text-align: center; font-size:xx-large;  ">Ma conso</h1>
        <div class="content">
                <div class="circle-container">
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                        <div class="chiffre">
                            <h1>00kw</h1>
                            <h1>5000FCFA</h1>
                        </div>
                        <div class="icon">
                            <img src="venti.png" alt="" width="50" height="50">
                            <img src="light.png" alt="" width="50" height="50">

                        </div>

                    </div>
                    <!-- <i class="fas fa-bolt icon-left"></i>
                    <i class="fas fa-snowflake icon-top"></i>
                    <i class="fas fa-tv icon-right"></i>
                    <i class="fas fa-utensils icon-bottom"></i> -->
                </div>

                <div class="notification-container">
                    <div class="notification">
                        <h1>Notification <i class="fas fa-bell" style="width: 30px; height: 30px; padding-left:10px; padding-right:10px;"></i></h1>
                        <p>Votre chauffe-eau a consommé le plus durant ce mois de septembre.</p>
                    </div>
                    <div class="notification">
                        <h1>Notification <i class=" fas fa-bell" style="width: 30px; height: 30px; padding-left:10px; padding-right:10px;"></i></h1>
                        <p>Si vous continuez ainsi le mois prochain, vous allez consommer 24 kW.</p>
                    </div>
                </div>
        </div>
                <script>

                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'doughnut', // Type de graphique en forme de cercle
                        data: {
                            labels: ['Chauffe-eau ', 'Climatisation', 'Téléviseur','Réfrigerateur','ventilateur','ampoule','Thermostre'], // Étiquettes de chaque section
                            datasets: [{
                                data: [30, 40, 50,25,60,100,70], // Données pour chaque section
                                backgroundColor: ['#EE0B0B', '#7963CD', '#63CD81','#5BC7E6','#FF8F78','#BB0B0B','#7F00FF'] // Couleurs de chaque section
                            }]
                        },
                        options: {
                        plugins: {
                            legend: {
                                display: false // Masquer la légende
                            },
                            pieceLabel: {
                                render: 'image', // Utiliser une image comme étiquette
                                fontColor: 'black', // Couleur du texte
                                imageOffset: {x: 0, y: 0}, // Ajuster le décalage de l'image
                                position: 'border', // Position de l'image (inside, outside, border)
                                images: [{src: 'venti.png', width: 40, height: 40},{src: 'light.png', width: 40, height: 40}],// Configurer l'image de l'icône
                            }
                        }
                    }
                    });

                        // var ctx = document.getElementById('myChart').getContext('2d');
                        // var myChart = new Chart(ctx, {
                        //     type: 'doughnut',
                        //     data: {
                        //         labels: ['Utilisation', 'Reste'],
                        //         datasets: [{
                        //             data: [80, 20,30,50,60],
                        //             backgroundColor: ['blue', 'lightgray','lightblue','purple']
                        //         }]
                        //     },
                        //     options: {
                        //         cutout: 60,
                        //         plugins: {
                        //             legend: {
                        //                 display: false
                        //             }
                        //         }
                        //     }
                        // });

                    var iconContainer = document.querySelector('.icon');
                    var sections = myChart.data.datasets[0].data;
                    var iconWidth = 40; // Largeur de l'icône en pixels
                    var radius = myChart.innerRadius + (myChart.outerRadius - myChart.innerRadius) / 2;

                    sections.forEach(function (value, index) {
                    var angle = (myChart.startAngle + myChart._getArcLength() * (index + 0.5)) - Math.PI / 2;
                    var icon = document.createElement('img');
                    icon.src = index === 0 ? 'chauffe-eau.png' : 'clim.png';
                    icon.width = icon.height = iconWidth;
                    icon.style.position = 'absolute';
                    icon.style.top = radius * Math.sin(angle) + 'px';
                    icon.style.left = radius * Math.cos(angle) + 'px';
                    icon.style.transform = 'translate(-50%, -50%)';
                    iconContainer.appendChild(icon);
        });
                </script>

    </body>

    </html>
</div>
@endsection
