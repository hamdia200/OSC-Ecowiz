@extends("menu")
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notification</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
    </style>
</head>
<body>

    <header>
    <div class="container">
        <div class="ntfctns" id="notify">
        <i class="fa fa-bell-o fa-2x" data-toggle="dropdown" data-target="ntfctns" id="ntfctn-bell"><span class="badge top ntftcn-cnt">3</span></i>
        <div id="ntfctns" class="dropdown">
            <div class="down-arrow"></div>
            <ul>
                <li class="ntfctn-hdng">Notifications <span class="badge ntftcn-cnt">3</span></li>
                <li class="ntfctn unr-ntfctn">
                    <a href="void:;"><img src="http://dummyimage.com/30x30/EAC925/ffffff.jpg&text=img"><b>Chauffe-eau </b>commented on your post </a>
                </li>
                <li class="ntfctn unr-ntfctn">
                    <a href="void:;"><img src="http://dummyimage.com/30x30/EA5625/ffffff.jpg&text=img"><b>Heure de pointe</b> likes your post </a>
                </li>
                <li class="ntfctn unr-ntfctn">
                    <a href="void:;"><img src="http://dummyimage.com/30x30/EAC925/ffffff.jpg&text=img"><b>réfrigerateur </b>likes your pic </a>
                </li>
                <li class="ntfctn">
                    <a href="void:;"><img src="http://dummyimage.com/30x30/EA5625/ffffff.jpg&text=img"><b>Micro-ondes</b> likes your post </a>
                </li>
                <li class="ntfctn">
                    <a href="void:;"><img src="http://dummyimage.com/30x30/EAC925/ffffff.jpg&text=img"><b>télévis </b>likes your pic </a>
                </li>

            </ul>
        </div>
        </div>
    </div>
    </header>

    <div id="popupWrap" class="popups">
    <i class="fa fa-times close"></i>
    <p class="popup-ntfctn">John Smith commented on your post</p>
    </div>

</body>
</html>
@endsection

