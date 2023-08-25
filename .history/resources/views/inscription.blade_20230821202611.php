<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Authentification</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #C9D6F4;
        }

        /* .header {
            background-color: blue;
            padding: 10px;
        } */

        /* .image {
            height: 50px;
        } */

        .container {
            background-color: #C9D6F4;
            max-width: 100%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .register{
            flex-direction: column;
            align-items: flex-start;
            text-align: center;

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
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            max-width: 100;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <!-- <div class="header">
        <img src="{{asset('/image/ecow.png')}}" alt="" class="image">
    </div> -->
    <h2 class="register">S'inscrire</h2>
    <div class="container">
        <div class="form-box">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom">
                </div>

                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="mot_de_passe">Mot de passe</label>
                    <input type="password" name="mot_de_passe">
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form" />
                    <label class="form-check-label" for="form">
                        J'ai lu et j'accepte les <a href="#!" class="text-body"><u>conditions d'utilisation</u></a>
                    </label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">S'inscrire</button>
            </form>
        </div>
    </div>

    <script src="" async defer></script>
</body>
</html>
