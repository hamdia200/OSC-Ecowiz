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
        body {
    font-family: Calibri;
    /* background:#EEE; */
    }

    a {
    color: inherit;
    text-decoration: none;
    }

    * {
    margin: 0px;
    padding: 0px;
    }

    ul li {
    list-style-type: none;
    }

    header {
    height: 40px;
    width: 100%;
    position: relative;
    background-color: #5E6E7D;
    padding: 10px 0;
    }

    .down-arrow {
    width: 0px;
    background: rgba(0, 0, 0, 0);
    border: 10px solid transparent;
    border-bottom: 10px solid #D5ECF1;
    position: relative;
    left: 50%;
    margin-left: -15px;
    }

    .ntfctns {
    display: inline-block;
    width: 50px;
    position: relative;
    /* background:#FFF; */
    
    height: 40px;
    margin: 0 20px;
    text-align: center;
    float: left;
    }

    .ntfctns ul li a {
    float: left;
    width: 100%;
    padding: 10px 20px;
    box-sizing: border-box;
    }

    .dropdown {
    display: none;
    width: 240px;
    position: relative;
    /* left: -170%; */
    
    float: left;
    text-align: left;
    }

    .dropdown ul li:first-child {
    border-top: none;
    border-radius: 10px 10px 0 0;
    }

    .dropdown ul li:last-child {
    border-radius: 0 0 10px 10px;
    }

    .dropdown ul {
    border-radius: 0 0 10px 10px;
    float: left;
    width: 100%;
    }

    .dropdown ul li {
    position: relative;
    border-top: 1px solid #FFF;
    float: left;
    width: 100%;
    }

    .ntfctns .fa {
    position: relative;
    color: #FFF;
    margin: 5px 10px;
    cursor: pointer;
    /* left: 70%; */
    }

    .badge {
    padding: 2px 3px;
    background-color: #D5ECF1;
    border-radius: 50%;
    font-size: 10px;
    height: 15px;
    min-width: 15px;
    box-sizing: border-box;
    display: inline-block;
    vertical-align: middle;
    text-align: center;
    font-weight: bold;
    color: #5E6E7D;
    line-height: 1;
    }

    .badge.top {
    position: absolute;
    top: -3px;
    right: -3px;
    }

    .dropdown.open {
    display: block;
    }

    .ntfctn {
    background: #EEF5F7;
    font-size: .8em;
    }

    .unr-ntfctn {
    background: #C9DCE0;
    }

    .ntfctn-hdng {
    background: #EEF5F7;
    text-align: center;
    color: #000;
    padding: 10px 0;
    }

    .ntfctn-hdng .badge {
    background: #5E6E7D;
    color: #FFF;
    }

    .ntfctn img {
    border-radius: 50%;
    vertical-align: middle;
    height: 30px;
    width: 30px;
    margin-right: 20px;
    float: left;
    }

    .container {
    max-width: 960px;
    margin: auto;
    }

    .popups {
    display: none;
    width: 220px;
    min-height: 30px;
    position: fixed;
    left: 20px;
    bottom: 30px;
    border-radius: 5px;
    padding: 5px 15px;
    background: #D2E9F3;
    color: #5E6E7D;
    }

    .popups .fa-times {
    position: absolute;
    right: 5px;
    top: 5px;
    cursor: pointer;
    }

    .popup-ntfctn {
    font-size: 14px;
    }
    </style>
</head>
<body>

    <div class="container">
        <div class="ntfctns" id="notify">
            <i class="fa fa-bell-o fa-2x" data-toggle="dropdown" data-target="ntfctns" id="ntfctn-bell"><span class="badge top ntftcn-cnt">3</span></i> 
        <div id="ntfctns" class="dropdown">
            <div class="down-arrow"></div>
            <ul>
                <li class="ntfctn-hdng">Notifications <span class="badge ntftcn-cnt">3</span></li>
                <li class="ntfctn unr-ntfctn">
                    <a href="void:;"><img src="{{asset('/image/eau(1).png')}}"><b>Chauffe-eau </b>Votre chauffe-eau a consommé le plus hier </a>
                </li>
                <li class="ntfctn unr-ntfctn">
                    <a href="void:;"><img src="{{asset('//image/calendrier.png')}}"><b>Heure de pointe</b> C'est l'heure de la double facturation  </a>
                </li>
                <li class="ntfctn unr-ntfctn">
                    <a href="void:;"><img src="{{asset('//image/frigo.png')}}"><b>réfrigerateur </b>Votre refrigerateur a consommé le plus </a>
                </li>
                <li class="ntfctn">
                    <a href="void:;"><img src="{{asset('//image/detective.png')}}"><b>Detection</b>cet appareil est énergivore </a>
                </li>
                <li class="ntfctn">
                    <a href="void:;"><img src="{{asset('//image/television.png')}}"><b>télévision </b>Votre télévision à consommé le plus </a>
                </li>

            </ul>
        </div>
        </div>
    </div>

    <div id="popupWrap" class="popups">
    <i class="fa fa-times close"></i>
    <p class="popup-ntfctn">John Smith commented on your post</p>
    </div>


        <script>
            var $dd = $('*').data('toggle', 'dropdown');
                $dd.on('click', function(e) {
                $(this).children('.badge').hide();
                var icoWid = $(this).outerWidth(),
                    ddlWid = $('.dropdown').outerWidth(),
                    calc = -((ddlWid / 2) - icoWid);
                $(this).next('.dropdown').css('left', calc).slideToggle();
                $(document).on('keydown', function(e) {
                    if (e.which === 27) {
                    $('.dropdown').hide();
                    }
                });
                e.stopPropagation();
                });

                var json = ["chauffe-eau commented on your post (2 secs ago)", "Cathel Gomes likes your post (1 sec ago)", "Joe Cale posted on your wall (few mins ago)"];
                $('.close').on('click', function() {
                $(this).parent('#popupWrap').hide();
                });

                i = 0;

                setInterval(function notifyRefresh() {
                if (i < json.length) {
                    $('#popupWrap').show();
                    $('#popupWrap').children('.popup-ntfctn').text(json[i]);
                    i++;
                    setTimeout(function popupAlert() {
                    $('#popupWrap').hide();
                    }, 4000);
                } else {
                    $('#popupWrap').hide();
                    i = i;
                }
                }, 6000);
            </script>



</body>
</html>
@endsection





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Notifications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .notification-icon {
            position: relative;
            cursor: pointer;
        }
        
        .notification-count {
            background-color: red;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: -5px;
            right: -5px;
            font-size: 12px;
        }
        
        .notification-popup {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            width: 300px;
            padding: 10px;
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="notification-icon">
        <span class="notification-count">3</span>
        <img src="bell.png" alt="Notification Bell" width="32" height="32">
    </div>
    
    <div class="notification-popup" id="notificationPopup">
        <h3>Notifications</h3>
        <ul id="notificationList">
            <li>You have a new message.</li>
            <li>Your post got a like.</li>
            <li>Someone mentioned you in a comment.</li>
        </ul>
    </div>

    <script>
        const notificationIcon = document.querySelector('.notification-icon');
        const notificationPopup = document.getElementById('notificationPopup');
        
        notificationIcon.addEventListener('click', () => {
            // Toggle the visibility of the notification popup
            notificationPopup.style.display = notificationPopup.style.display === 'block' ? 'none' : 'block';
        });

        // Close the notification popup when clicking outside of it
        window.addEventListener('click', (event) => {
            if (event.target !== notificationIcon && event.target !== notificationPopup) {
                notificationPopup.style.display = 'none';
            }
        });
    </script>
</body>
</html>


