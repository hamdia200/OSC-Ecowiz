<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
                text-align: center;
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
            .active-icon{
                color: #1758EC;
            }
            a{
                text-decoration: none !important;
            }
            .sidebar {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #111;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
                }

                .sidebar a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
                }

                .sidebar a:hover {
                color: #f1f1f1;
                }

                .sidebar .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
                }

                .openbtn {
                font-size: 20px;
                cursor: pointer;
                background-color: #111;
                color: white;
                padding: 10px 15px;
                border: none;
                }

                .openbtn:hover {
                background-color: #444;
                }

                #main {
                transition: margin-left .5s;
                padding: 16px;
                }

                @media screen and (max-height: 450px) {
                .sidebar {padding-top: 15px;}
                .sidebar a {font-size: 18px;}
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
                            <i class="fas fa-bell @if(Request::is('prediction')) active-icon @endif"></i> <a href="{{route('prediction')}}"><span class="menu-text">Prédiction</span></a>
                        </span>
                    </li>
                    <li>
                        <span class="menu-item @if(Request::is('assistance')) active @endif">
                            <i class="fas fa-question-circle @if(Request::is('assistance')) active-icon @endif"></i> <a href="{{route('assistance')}}"><span class="menu-text">Assistance</span></a>
                        </span>
                    </li>
                </ul>

        </header>
        <!-- Menu toggle vertical -->
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>

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



