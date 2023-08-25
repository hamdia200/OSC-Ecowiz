
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Authentification</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <div class="header">
        <div class="content">
            <img src="{{asset('/image/ecow(1).png')}}">
        </div>

    </div>
        <form action="" method="POST">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom">
            </div>

            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email">
            </div>
<
            <div>
                <label for="MDP">Mot de passe</label>
                <input type="password" name="mot_de_passe">
            </div>

            <div>
                <button type="submit" class="btn btn-lg btn-primary">S'inscrire</button>
            </div>

        </form>

        <script src="" async defer></script>
    </body>
</html>
