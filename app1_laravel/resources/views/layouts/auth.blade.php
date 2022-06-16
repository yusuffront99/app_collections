<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/dist/assets/css/plugins/style_login.css')}}">
    <style>
        #notifDiv {
            z-index:10000;
            display: none;
            background: green;
            font-weight: 450;
            width: 350px;
            position: fixed;
            top: 10%;
            right:10%;
            color: white;
            padding: 5px 20px;
        } 
    </style>
</head>
<body>
    <div id="notifDiv"></div>
    @yield('content')
</body>
</html>

<script>
    $(document).ready(function(){
        $('.btn-signin').click(function(){
            let email = 'adminer@gmail.com';
            let password = 'adminer';

            let validatate_failed = $('#email').val() != email || $('#password').val() != password;
            let validate_success = $('#email').val() == email && $('#password').val() == password;

            if(validatate_failed) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'red');
                $('#notifDiv').text('Email or Password invalid');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
            } else if  (validate_success) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('Successfully');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
                window.location = '/dashboard';
            } else {
                alert('Login Failed');
                // window.location = 'index.html';
            }
        })
    })
</script>