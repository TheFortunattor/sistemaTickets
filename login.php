<?php
    session_start();
    session_destroy();
    //comentario php
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link href="./src/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./src/css/login.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./src/js/jquery.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>
    <style>
        .alert{
            display:none;
            position:absolute;
            top:0;
            left:0;
            width:100%;
        }

    </style>
    
</head>
<body>

    <div class="alert alert-primary" role="alert" id="alert-perdida">
        Por problemas con usuario y/o contraseña contactarse con franfortunatto0@gmail.com
    </div>
    <div class="alert alert-success" role="alert" id="alert-ok">
        Bienvenido
    </div>
    <div class="alert alert-danger" role="alert" id="alert-error">
        Error en usuario y/o contraseña
    </div>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <div class="fadeIn first">
                <a href="./index.html"><img src="./src/img/logo.png" id="icon" alt="User Icon" /></a>
            </div>

            <form method="post" onSubmit="return conectar();" >
                <input type="text" id="login" class="fadeIn second" placeholder="Usuario...">
                <input type="password" id="password" class="fadeIn third" placeholder="Contraseña...">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <div id="formFooter" onclick="forgot();">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>


</body>
<script>
    function forgot(){
        document.getElementById("alert-ok").style.display = 'none';
        document.getElementById("alert-error").style.display = 'none';
        document.getElementById("alert-perdida").style.display = 'block';
    }
    function conectar(){
        var usr = document.getElementById("login").value;
        var pas = document.getElementById("password").value;
        var parametros = {
            "user": usr,
            "password": pas
        };
        //JSON
        console.log(parametros);
        $.ajax({
            data:  parametros,
            url:   './src/php/checkLogin.php',
            type:  'post',
            success:  function (res) {
                if(res == "ok")
                {
                    document.getElementById("alert-error").style.display = 'none';
                    document.getElementById("alert-ok").style.display = 'block';
                    $("#alert-ok").html("Bienvenido " + usr); 
                    setTimeout("location.href='./panel.php'", 1000);
                }
                else
                {
                    document.getElementById("alert-ok").style.display = 'none';
                    document.getElementById("alert-error").style.display = 'block';
                }
            }
        });
        return false;
    };
</script>
</html>