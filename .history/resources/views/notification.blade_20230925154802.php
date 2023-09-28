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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
@endsection











