@extends ("menu")
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

        .body{
            display: flex;
            margin-top: 5rem;

        }
        .container{
            background-color: #C9D6F4;
            max-width: 100%;
            height: 100vh;
            top: -20px;
            justify-content: center;
        }
        .circle-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 2rem;
        }

        .image-cercle {
            width: 500.994px;
            height: 500.994px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-left: 10px;
            padding-right: 10px;
            flex-shrink: 0;
            border-radius: 449.994px;
        }

        .notification-container{
            width: 100%;
            text-align: center;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-left: 80px;
            padding-right: 80px;
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

        .chiffre {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 20px;
            color: var(--primary, #2F2885);
            }
            .text{
                display: flex;
                align-items:  center;
                justify-content: center;
                color: var(--primary, #1758EC);
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                border-radius: 10px;
                border: 0px solid #000;
                margin-top: 2rem;

            }



        </style>
    </head>

    <body>
    <div class="container">
            <!-- <div class="text">
                <h1>Ma conso </h1>
            </div> -->
        <div class="content">
                <div class="circle-container">
                    <div class="image-cercle">
                        <img src="{{asset('/image/cercle.png')}}" alt="">
                        <div class="chiffre">
                            <h1>00kw</h1>
                            <h1>0000FCFA</h1>
                        </div>

                    </div>
                </div>

                <div class="notification-container">
                    <div class="text" style="text-align: center;">
                        <h1>Ma conso </h1>
                    </div>
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
        </div>
        </body>
        </html>
@endsection
