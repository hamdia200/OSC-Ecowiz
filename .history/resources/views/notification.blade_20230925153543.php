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
    
</body>
</html>
@endsection





=
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


