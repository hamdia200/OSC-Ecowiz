<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>centrale</title>
    <style>
        .header{
            background-color: #FFFFFF;
            padding-block: 0.5rem;
        }
        .container  {
            background-color: #C9D6F4;
            max-width: 100%;
            height: 90vh;

        }
        .content {
            display: grid;
            grid-template-columns: 50%  50% ;
            grid-template-rows:  auto ;

            max-width: 100%;


            height :  auto ;

        }
        .content {
            width:90%;
            margin-inline:auto;
            border:1px red solid;
        }
        .eco {
            width: 100% ;
            height:  auto ;
            margin-top:5rem ;
        }
        .entete >h1{
            font-size: 3rem ;
            text-align:right;
        }
        .sous-text {
            margin-top:  5rem ;
            text-align:right;
        }
        .logo{
            width: 100px;
            height:100px;
            flex-shrink: 0;
            border: 0px solid #000;
            background: url(<path-to-image>), lightgray 50% / cover no-repeat;
            fl
        }
        /* .btn {
            margin-top: 5rem ;
            font-size:18px;
            border:none;
            padding:20px 30px;
            background-color:blue;
            color:white;
            border-radius:7%;
            display:flex ;
            justify-content:center;
            float: right;
            display:flex;
        } */

    </style>

    <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
</head>
<body>
    <div class="header">
        <img src="{{asset('/image/ecow.png')}}" alt="" class="logo">
    </div>

    <div class="container">

    <div class="content">

            <div class="eco">
                <img src="{{asset('/image/centrale.png')}}" alt="">
            </div>

            <div class="text">
            <div class="entete"> <h1> Tout le monde mérite </h1> <h1> de savoir ce qu'il consomme! </h1>

            </div>

            <div class="sous-text">
                <h2> pour profiter des différentes fonctionnalités de notre plateforme,veuillez cliquez sur le bouton connecter ci-dessous </h2>
            </div>

            <!-- <div class="bouton">
                <button type="button" class="btn btn-primary"> Connecter </button>
            </div> -->


    </div>

    </div>

    </div>

</body>
</html>
