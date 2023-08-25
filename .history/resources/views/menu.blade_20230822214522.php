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
            .navbar{
                list-style-type: none;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color:#FFFFFF;
                height: 100px;
            }

            .navbar-nav li {
                margin: 0;
                padding: 0;
                flex: 1;
                text-align: center; /* Centre le contenu */
            }

            .nav-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }


            .nav-item {
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('/image/ecow.png')}}" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="accueil.blade.php"><i class="fas fa-home"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="regulation.blade.php"><i class="fas fa-bolt"></i> Régulation d'électricité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Surveillance.blade.php"><i class="fas fa-eye"></i> Surveillance des données</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notification.blade.php"><i class="fas fa-bell"></i> Notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assistance.blade.php"><i class="fas fa-question-circle"></i> Assistance</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


        </header>
        <div class="container">
                @yield('content')
        </div>

    </body>


</html>



