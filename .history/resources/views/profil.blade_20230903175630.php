<!DOCTYPE <html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <title>profil</title>
        sty
    </head>
    <body>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img id="profileImage" src="{{asset('/image/connexion.png')}}" width="150px"><button id="changeImageButton" class="btn btn-secondary mt-2">Changer l'image</button><span class="font-weight-bold">Ecowiz</span><span class="text-black-50">ecowiz@gmail.com</span><span> </span></div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control" placeholder="Veuillez saisir votre nom" value=""></div>
                    <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" value="" placeholder="Veuillez saisir votre prenom"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Telephone</label><input type="text" class="form-control" placeholder="Veuillez entrez votre numero" value=""></div>
                    &nbsp;
                    <div class="col-md-12"><label class="labels">Identifiant</label><input type="text" class="form-control" placeholder="Veuillez entrez votre identifiant" value=""></div>
                    &nbsp;
                    <div class="col-md-12"><label class="labels"> Email </label><input type="text" class="form-control" placeholder="Veuillez saisir votre email" value=""></div>
                    &nbsp;
                    <div class="col-md-12"><label class="labels">Université</label><input type="text" class="form-control" placeholder="Veuillez saisir votre structure" value=""></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Enregistrer</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const changeImageButton = document.getElementById('changeImageButton');
    const profileImage = document.getElementById('profileImage');

    const imageUrls = [
        "{{asset('image/user.png')}}",
        "{{asset('image/users.png')}}",
        " {{asset('image/conn.png')}}"
        // Ajoutez autant d'URL d'images que vous le souhaitez
    ];

    let currentIndex = 0;

    changeImageButton.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % imageUrls.length;
        profileImage.src = imageUrls[currentIndex];
    });
});


</script>
    </body>
    </html>
