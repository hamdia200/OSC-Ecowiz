<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <title>menu</title>
        <style>
            .menu-horizontal {
                list-style-type: none;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color:#FFFFFF;
                height: 100px;
            }

            .menu-horizontal li {
                margin: 0;
                padding: 0;
                flex: 1;
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
                display: flex;
                justify-content: center;
                font-size: 16px;
                align-items: center;
                margin-top: 2px;
                padding-inline: -5px;
            }

            .logo {
                padding-left: 20px;
                height: 100px;
            }
            .wrap  {
                width: 90%  ;
                margin-inline:  auto  ;
            }
        </style>
    </head>

    <body>
        <header>
                <ul class="menu-horizontal fixed-top wrap">
                    <div class="header">
                        <img src="{{asset('/image/ecow.png')}}" alt="" class="logo">
                    </div>
                    <li>
                        <span class="menu-item">
                            <i class="fas fa-home"></i><a href="accueil.blade.php"><span class="menu-text">Accueil</span></a>
                        </span>

                    </li>
                    <li>
                        <span class="menu-item">
                            <i class="fas fa-bolt"></i> <a href="regulation.blade.php"><span class="menu-text">Régulation d'éléctricité </span></a>
                        </span>
                    </li>

                    <li>
                        <span class="menu-item">
                            <i class="fas fa-eye"></i><a href="Surveillance.blade.php"><span class="menu-text">Surveillance des données </span></a>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item">
                            <i class="fas fa-bell"></i><a href="notification.blade.php"><span class="menu-text">Notification</span></a>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item">
                            <i class="fas fa-question-circle"></i><a href="assistance.blade.php"><span class="menu-text">Assistance</span></a>
                        </span>
                    </li>
                </ul>

        </header>
        <div class="container">
                @yield('content')
        </div>

    </body>


</html>



