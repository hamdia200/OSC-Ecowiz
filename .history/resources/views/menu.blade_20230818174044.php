<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <title>menu</title>
        <style>
            .menu-horizontal {
                list-style-type: none;
                display: flex;
                align-items: center;
                padding: 0;
                margin: 0;
                background-color:blue;
                height: 100px;
                border-radius: 50%;
                overflow: hidden; /* Assure que le cercle ne dépasse pas */
            }

            .menu-horizontal li {
                margin: 0;
                padding: 0;
                flex: 1; /* Éléments du menu avec largeur égale */
                text-align: center; /* Centre le contenu */
            }

            .menu-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
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

            .logo {
                padding-left: 20px;
                height: 35px;
            }
        </style>
    </head>

    <body>
        <header>
                <ul class="menu-horizontal fixed-top">
                    <div class="header">
                        <img src="{{asset('/image/ecow.png')}}" alt="" class="logo">
                    </div>
                    <li>
                        <span class="menu-item">
                            <div class="menu-icon-circle">
                                <i class="fas fa-home"></i>
                            </div>
                            <span class="menu-text">Accueil</span>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item">
                            <div class="menu-icon-circle">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <span class="menu-text">Régulation d'éléctricité </span>
                        </span>
                    </li>

                    <li>
                        <span class="menu-item">
                            <div>
                            <i class="fas fa-eye"></i>
                            
                            <span class="menu-text">Surveillance des données </span>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item">
                            <div class="menu-icon-circle">
                                <i class="fas fa-bell"></i>
                            </div>
                            <span class="menu-text">Notification</span>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item">
                            <div>
                                <i class="fas fa-question-circle"></i>
                            </div>
                            <span class="menu-text">Assistance</span>
                        </span>
                    </li>
                </ul>

        </header>
        <div class="container">
                @yield('content')
        </div>

    </body>


</html>


