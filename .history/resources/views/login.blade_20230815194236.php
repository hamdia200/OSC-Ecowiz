<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<body>
<div class="header">
        <img src="{{asset('/image/ecow.png')}}" alt="" class="image">
    </div>

    <div class="container">
        <div class="form-box">
            <form action="" method="POST">


                

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="mot_de_passe">Mot de passe</label>
                    <input type="password" name="mot_de_passe">
                </div>

                <button type="submit" class="btn btn-lg btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>

</body>
</html>
