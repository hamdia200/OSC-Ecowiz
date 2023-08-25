<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
    <title>connexion</title>
</head>
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #93ABE1;
        }


        .container {
            background-color: #93ABE1;
            max-width: 100%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            width: 80%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .btn {
            margin-top: 1rem;
            font-size: 18px;
            background-color: #93ABE1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .abandon{
            margin-top: 3rem;
            text-align: right;
        }
        .remember{
            margin-top: 3rem;
            display: ;
        }
        .forget{

        }
    </style>
<body>
    <div class="container">
        <div class="form-box">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="mot_de_passe">Mot de passe</label>
                    <input type="password" name="mot_de_passe">
                </div>
                    <div class="forget">
                        <div class="remember">
                            <input class="form-check-input" type="checkbox" value="" id="form" checked />
                            <label class="form-check-label" for="form"> Souviens-toi de moi </label>
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
