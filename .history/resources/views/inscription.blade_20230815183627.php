
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Authentification</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .header{
                background-color: blue;
            }
            .image{
                padding-left: 20px;
                height: 50px;
            }
            .container{
                background-color: beige;
                max-width: 100%;
                height: 90vh;
            }
            .btn{
                margin-top: 5rem ;
                font-size:18px;
                background-color: blue;
                color: white;
            }

        </style>
    </head>
    <body>

    <div class="header">
        <img src="{{asset('/image/ecow.png')}}" alt="" class="image">
    </div>

    <div class="container">
        <form action="" method="POST">
            <div class="firstname">
                <label for="nom" >Nom</label>
                <input type="text" name="nom">
            </div>
            </br>
            <div class="">
                <label for="prenom" >Prénom</label>
                <input type="text" name="prenom">
            </div>
            </br>
            <div>
                <label for="email" >Email</label>
                <input type="email" name="email">
            </div>
            </br>
            <div>
                <label for="MDP" class="mdp">Mot de passe</label>
                <input type="password" name="mot_de_passe">
            </div>
            </br>
            <div>
                <button type="submit" class="btn btn-lg btn-primary">S'inscrire</button>
            </div>
    </div>
        </form>

        <script src="" async defer></script>
    </body>
</html>
