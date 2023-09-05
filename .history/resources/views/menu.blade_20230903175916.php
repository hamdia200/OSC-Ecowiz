<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
        <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <title>menu</title>

        <style>
            
        </style>

    </head>

    <body>
        <header class="head">
                <ul class="menu-horizontal fixed-top wrap">
                    <div class="header">
                        <button class="openbtn" onclick="openNav()">☰</button>
                        <img src="{{asset('/image/ecow.png')}}" alt="" class="logo">
                    </div>
                    <li>
                        <span class="menu-item @if(Request::is('accueil')) active @endif">
                            <i class="fas fa-home @if(Request::is('accueil')) active-icon @endif"></i> <a href="{{route('accueil')}}"><span class="menu-text">Accueil</span></a>
                        </span>

                    </li>
                    <li>
                        <span class="menu-item @if(Request::is('regulation')) active @endif">
                            <i class="fas fa-bolt @if(Request::is('regulation')) active-icon @endif"></i> <a href="{{route('regulation')}}"><span class="menu-text">Régulation d'éléctricité </span></a>
                        </span>
                    </li>

                    <li>
                        <span class="menu-item @if(Request::is('Surveillance')) active @endif">
                            <i class="fas fa-eye @if(Request::is('Surveillance')) active-icon @endif"></i> <a href="{{route('Surveillance')}}"><span class="menu-text">Surveillance des données </span></a>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item @if(Request::is('prediction')) active @endif">
                            <i class="fas fa-chart-line @if(Request::is('prediction')) active-icon @endif"></i> <a href="{{route('prediction')}}"><span class="menu-text">Prédiction</span></a>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item @if(Request::is('historique')) active @endif">
                            <i class=" fas fa-history @if(Request::is('historique')) active-icon @endif"></i> <a href="{{route('historique')}}"><span class="menu-text">Historique</span></a>
                        </span>
                    </li>
                </ul>

        </header>
        <!-- Menu toggle vertical -->
        <div class="menu-container">
            <!-- <div id="main">
                <button class="openbtn" onclick="openNav()">☰ </button>

            </div> -->

            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="{{route('accueil')}}"><i class="fas fa-home"></i> <span>Accueil</span></a>
                <a href="{{route('regulation')}}"><i class="fas fa-bolt"></i> <span>Régulation de l'électricité</span></a>
                <a href="{{route('profil')}}"><i class="fas fa-user"></i> <span>Profil</span></a>
                <a href="{{route('Surveillance')}}"><i class="fas fa-eye"></i> <span>Surveillance de données</span></a>
                <a href="{{route('prediction')}}"><i class="fas fa-chart-line"></i> <span>Prédiction</span></a>
                <a href="{{route('notification')}}"><i class="fas fa-bell"></i> <span>Notification</span></a>
                <a href="{{route('historique')}}"><i class="fas fa-history"></i> <span>Historique</span></a>
            </div>
        </div>

        <div class="container">
                @yield('content')
        </div>
        <script>
            function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            }
        </script>





    </body>


</html>



