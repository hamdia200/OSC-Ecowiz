@extends("menu")
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notification</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ajoutez votre style CSS ici */
    </style>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary" id="notificationButton">Notifications</button>
        <div class="dropdown" id="notificationDropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-danger" id="notificationCount">3</span>
                Voir les notifications
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Notification 1</a>
                <a class="dropdown-item" href="#">Notification 2</a>
                <a class="dropdown-item" href="#">Notification 3</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Cliquez sur le bouton de notification pour afficher/masquer les notifications
            $("#notificationButton").click(function () {
                $("#notificationDropdown").toggleClass("show");
            });

            // Fermez les notifications lorsque vous cliquez en dehors de la zone de notification
            $(document).click(function (e) {
                if (!$("#notificationButton").is(e.target) && !$(".dropdown-menu").is(e.target) && $(".dropdown-menu").has(e.target).length === 0) {
                    $("#notificationDropdown").removeClass("show");
                }
            });
        });
    </script>
</body>
</html>
@endsection

