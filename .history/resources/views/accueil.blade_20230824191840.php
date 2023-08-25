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
            top: -20px;
            justify-content: center;



        }
        .circle-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 3rem;
        }

        .image-cercle {
            width: 449.994px;
            height: 449.994px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-left: 10px;
            padding-right: 10px;
            flex-shrink: 0;
            border-radius: 449.994px;
        }

        .notification-container {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-left: 50px;
            padding-right: 50px;
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
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .beignet{
            width: 287px;
            height: 144px;
        }
        .chiffre {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            }
            .text{
                text-align: center;
                color: var(--primary, #1758EC);
                font-family: Inter;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                border-radius: 10px;
                border: 0px solid #000;
                flex-shrink: 0;
            }



    </style>


    </style>
    <body>
        <div class="text">
            <h1>Ma conso </h1>
        </div>
        <div class="content">
                <div class="circle-container">
                    <div class="image-cercle">
                        <img src="{{asset('/image/cercle.png')}}" alt="" class="beignet">
                        <div class="chiffre">
                            <h1>00kw</h1>
                            <h1>5000FCFA</h1>
                        </div>
                        <!-- <div class="icon">
                            <i class="fas fa-bolt icon-left"></i>
                            <i class="fas fa-snowflake icon-top" ></i>
                            <i class="fas fa-utensils icon-bottom"></i>

                        </div> -->
                    </div>
                </div>

                <div class="notification-container">
                    <div class="notification">
                        <h1>Notification <i class="fas fa-bell" style="width: 50px; height: 50px; padding-left:10px; padding-right:10px;color:#C52B2B"></i></h1>
                        <p>Votre chauffe-eau a consommé le plus durant ce mois de septembre.</p>
                    </div>
                    <div class="notification">
                        <h1>Notification <i class=" fas fa-bell" style="width: 50px; height: 50px; padding-left:10px; padding-right:10px;color:#C52B2B"></i></h1>
                        <p>Si vous continuez ainsi le mois prochain, vous allez consommer 24 kW.</p>
                    </div>
                </div>
        </div>
                <!-- <script>

                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['Chauffe-eau ', 'Climatisation', 'Téléviseur','Réfrigerateur','ventilateur','ampoule','Thermostre'], // Étiquettes de chaque section
                            datasets: [{
                                data: [30, 40, 50,25,60,100,70],
                                backgroundColor: ['#EE0B0B', '#7963CD', '#63CD81','#5BC7E6','#FF8F78','#BB0B0B','#7F00FF'],
                            }]
                        },
                        options: {
                        plugins: {
                            legend: {
                                display: false
                            },
                            pieceLabel: {
                                render: 'image',
                                fontColor: 'black', // Couleur du texte
                                imageOffset: {x: 0, y: 0}, // Ajuster le décalage de l'image
                                position: 'border', // Position de l'image (inside, outside, border)
                                images: [{src: 'venti.png', width: 40, height: 40},{src: 'light.png', width: 40, height: 40}],// Configurer l'image de l'icône
                            }
                        }
                    }
                    });

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
                </script> -->

        </body>

        </html>
    </div>
@endsection
