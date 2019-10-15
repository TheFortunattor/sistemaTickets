<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRM - Fortunatto</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/estatico-adm.css">
    <link rel="stylesheet" href="src/css/dashboard.css">
</head>
<body>
    
    <header>
        <div>
            <img src="src/img/menu.png" height="15" alt="" class="pointer" onclick="menu();">
            Usuario
        </div>
        <div class="header-profile">
            <img src="src/img/notify.png" height="20" alt="" class="pointer">
            <img src="src/img/perfil.png" alt="" height="30" class="pointer" style="border-radius: 50%;">
        </div>
    </header>

    <nav>
        <div>
            <img src="src/img/logo.png" height="50" alt="LogoFortunattoCRM">
        </div>

        <ul>
            <li class="pagina-actual"><a href="">Dashboard</a></li>
            <li><a href="">Tickets</a></li>
            <li><a href="">Pendientes</a></li>
            <li><a href="">Notas</a></li>
            <li><a href="">Email</a></li>
            <li><a href="">Chat</a></li>
            <li><a href="">CPanel</a></li>
            <li><a href="">LogOut</a></li>
        </ul>
    </nav>
    <main>
        <section class="estadistica-global">
            <div>
                <div class="graph-circle azul">
                    <div class="tickets">Tickets</div>
                    <div class="cantidad">1128</div>
                    <div class="categoria">Totales</div>
                </div>
            </div>
            <div>
                <div class="graph-circle verde">
                    <div class="tickets">Tickets</div>
                    <div class="cantidad">1128</div>
                    <div class="categoria">Cerrados</div>
                </div>
            </div>
            <div>
                <div class="graph-circle rojo">
                    <div class="tickets">Tickets</div>
                    <div class="cantidad">1128</div>
                    <div class="categoria">Pendientes</div>
                </div>
            </div>            
        </section>
    </main>
    <script src="src/js/jquery.js"></script>
    <script src="src/js/menu.js"></script>
</body>
</html>