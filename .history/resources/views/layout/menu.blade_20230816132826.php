<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
        <title>menu</title>
        <style>
        .menu-horizontal {
            list-style-type: none;
            display: flex;
            align-items: center; /* Aligne les éléments au centre horizontalement */
            padding: 0;
            margin: 0;
            border-left: 2px solid gray;
            border-top: none;
        }

        .menu-horizontal li{
            margin: 0 2cm;
            padding: 0;
        }

        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Centre l'icône verticalement */
            border-left: 2p;
        }

        .menu-icon {
            width: 50px;
            height: 50px;
        }

        .menu-text {
            font-size: 16px;
            margin-top: 5px;
            text-align: center;
        }
        </style>
    </head>

    <body>
        
    <ul class="menu-horizontal">
            <li>
                <span class="menu-item">
                    <img src="{{asset('image/elect.png') }}" alt="Icone 1" class="menu-icon">
                    <i class="icofont-home"></i><span class="menu-text">Accueil</span>
                </span>
            </li>
            <li>
                <span class="menu-item">
                    <img src="{{asset('image/donnee.png') }}" alt="Icone 1" class="menu-icon">
                    <span class="menu-text">Régulation d'éléctricité </span>
                </span>
            </li>

            <li>
                <span class="menu-item">
                    <img src="{{asset('image/donnee.png') }}" alt="Icone 1" class="menu-icon">
                    <span class="menu-text">Surveillance des données </span>
                </span>
            </li>
            <li>
                <span class="menu-item">
                    <img src="{{asset('image/sup.png') }}" alt="Icone 1" class="menu-icon">
                    <span class="menu-text">Support</span>
                </span>
            </li>
            <li>
                <span class="menu-item">
                    <img src="{{asset('image/assist.png') }}" alt="Icone 1" class="menu-icon">
                    <span class="menu-text">Assistance</span>
                </span>
            </li>
        </ul>



