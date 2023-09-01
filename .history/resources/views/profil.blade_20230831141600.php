<!DOCTYPE <html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        <title>profil</title>

        <style>
                body {
                    background: #93ABE1
                }

                .form-control:focus {
                    box-shadow: none;
                    border-color: #BA68C8
                }

                .profile-button {
                    background: #1758EC;
                    box-shadow: none;
                    border: none
                }

                .profile-button:hover {
                    background: #93ABE1
                }

                .profile-button:focus {
                    background: #682773;
                    box-shadow: none
                }

                .profile-button:active {
                    background: #682773;
                    box-shadow: none
                }

                .back:hover {
                    color: #682773;
                    cursor: pointer
                }

                .labels {
                    font-size: 11px
                }


        </style>
    </head>
    <body>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img id="profileImage "   src="{{asset('/image/connexion.png')}}" width="150px"> <button id="changeImageButton" class="btn btn-secondary mt-2">Changer l'image</button><span class="font-weight-bold">Ecowiz</span><span class="text-black-50">ecowiz@gmail.com</span><span> </span></div>
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
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Enregistrer</button></div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const changeImageButton = document.getElementById('changeImageButton');
    const profileImage = document.getElementById('profileImage');

    const imageUrls = [
       "{{asset('/image/image1.jpg')}}",
        "{{asset(/image/image2.jpg)}}",
        " {{asset('/image/image3.jpg')}}"
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
