<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>connexion</title>
</head>
<style>

    </style>
<body>
    <div class="container-login">
        <div class="form-box">
            <img src="{{asset('/image/key.png')}}" alt="" class="image">
            <form action="{{ route('login') }}" method="POST">
                @csrf <!-- Ajout du jeton CSRF -->

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="mot_de_passe">Mot de passe</label>
                    <input type="password" name="password">
                </div>
                <div class="forget">
                    <div class="inscrire">
                        <a href="{{ route('inscription') }}">S'inscrire</a>
                    </div>
                    <div class="abandon">
                        <a href="#!">Mot de passe oublié?</a>
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-primary">Se connecter</button>
            </form>
        </div>
    </div>

</body>
</html>
