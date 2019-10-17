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
            <img src="src/img/logo_radio_ciudad.jpg" height="50" alt="LogoFortunattoCRM">
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
        <section class="api-google">
            <div id="chart_div"></div>
        </section>
    </main>
    <script src="src/js/jquery.js"></script>
    <script src="src/js/menu.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        var aux = $(window).width();
        $(window).resize(function(){
            aux = $(window).width();
            drawChart();
        });
    </script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        
        google.charts.load('current', {'packages':['line', 'corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Mes');
        data.addColumn('number', "Tickets");
        data.addColumn('number', "Pendientes");

        data.addRows([
        [new Date(2019, 0),  10,  0],
        [new Date(2019, 1),   20, 10],
        [new Date(2019, 2),   0, 0],
        [new Date(2019, 3),  15, 15],
        [new Date(2019, 4),  40, 18],
        [new Date(2019, 5),    10, 0],
        [new Date(2019, 6), 5, 2],
        [new Date(2019, 7), 20, 16],
        [new Date(2019, 8),  40, 13],
        [new Date(2019, 9),  10,  9],
        [new Date(2019, 10), 0,  0],
        [new Date(2019, 11), 30,  5]
        ]);

        var materialOptions = {
        chart: {
        title: 'Estadistica Tickets Año 2019'
        },
        width: aux,
        height: 250,
        series: {
        // Gives each series an axis name that matches the Y-axis below.
        0: {axis: 'Temps'},
        1: {axis: 'Daylight'}
        },
        axes: {
        // Adds labels to each axis; they don't have to match the axis names.
        y: {
        Tickets: {label: 'Nº'},
        Pendientes: {label: 'Nº'}
        }
        }
        };

        var classicOptions = {
        title: 'Estadistica de Tickets 2019',
        width: aux,
        height: 250,
        // Gives each series an axis that matches the vAxes number below.
        series: {
        0: {targetAxisIndex: 0},
        1: {targetAxisIndex: 1}
        },
        vAxes: {
        // Adds titles to each axis.
        0: {title: 'Nº Tickets'},
        1: {title: 'Nº Pendientes'}
        },
        hAxis: {
        ticks: [new Date(2019, 0), new Date(2019, 1), new Date(2019, 2), new Date(2019, 3),
                new Date(2019, 4),  new Date(2019, 5), new Date(2019, 6), new Date(2019, 7),
                new Date(2019, 8), new Date(2019, 9), new Date(2019, 10), new Date(2019, 11)
                ]
        },
        vAxis: {
        viewWindow: {
        max: 60
        }
        }
        };

        function drawMaterialChart() {
        var classicChart = new google.visualization.LineChart(chartDiv);
        classicChart.draw(data, classicOptions);
        }

        drawMaterialChart();

        }
    </script>
</body>
</html>
