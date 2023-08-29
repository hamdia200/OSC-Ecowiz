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
            body {
                overflow: hidden;
            }
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
                text-decoration: none;
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
                text-decoration: none;


            }

            .logo {
                padding-left: 20px;
                height: 100px;
            }
            .wrap  {
                margin-inline:  auto  ;
            }
            .head{
                position: sticky;
            }
            .active{
                background-color: blue;
                color: white;
            }
        </style>
    </head>

    <body>
        <header class="head">
                <ul class="menu-horizontal fixed-top wrap">
                    <div class="header">
                        <img src="{{asset('/image/ecow.png')}}" alt="" class="logo">
                    </div>
                    <li>
                        <span class="menu-item @if(Request::is('accueil')) active @endif">
                            <i class="fas fa-home"></i> <a href="{{route('accueil')}}"><span class="menu-text">Accueil</span></a>
                        </span>

                    </li>
                    <li>
                        <span class="menu-item @if(Request::is('regulation')) active @endif">
                            <i class="fas fa-bolt"></i> <a href="{{route('regulation')}}"><span class="menu-text">Régulation d'éléctricité </span></a>
                        </span>
                    </li>

                    <li>
                        <span class="menu-item @if(Request::is('Surveillance')) active @endif">
                            <i class="fas fa-eye "></i> <a href="{{route('Surveillance')}}"><span class="menu-text">Surveillance des données </span></a>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item @if(Request::is('notification')) active @endif">
                            <i class="fas fa-bell @if(Request::is('notification')) active-icon @endif"></i> <a href="{{route('notification')}}"><span class="menu-text">Notification</span></a>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item @if(Request::is('assistance')) active @endif">
                            <i class="fas fa-question-circle @if(Request::is('assistance')) active-icon @endif"></i> <a href="{{route('assistance')}}"><span class="menu-text">Assistance</span></a>
                        </span>
                    </li>
                </ul>

        </header>
        <div class="container">
                @yield('content')
        </div>

    </body>


</html>



