<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="<?php echo URL; ?>img/ico.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>   
    <title>SERVIFACIL</title>
</head>
<body>
    <center>
    <div class="container">
    
        <h1>Gráficas de servifacil</h1>
        <a title="Botón Para volver a la pagina inicial" class="btn btn-primary" href="<?php echo URL; ?>admin/menuA"  role="button">Inicio</a>
        <hr>

        <div class="row">
        
            <div class="col-md-6">
                <h2>Gráficas de Torta</h2>
                <hr>
                <div id="Torta" style="height: 250px;"></div>

            </div>

            <div class="col-md-6">
                <h2>Gráficas de Barras</h2>
                <hr>
                <div id="graph" style="height: 250px;"></div>
            </div>

        </div>

    </div>

    <script type="text/javascript">
    
    new Morris.Donut({
        element: 'Torta',
        data: [
            {value: 35, label: 'Programadas'},
            {value: 25, label: 'En Proceso'},
            {value: 35, label: 'Terminadas'},
            {value: 5, label: 'Canceladas'}
        ],
        formatter: function (x) { return x + "%"}
    }).on('click', function(i, row){
        console.log(i, row);
    });

    new Morris.Bar({
        element: 'graph',
        data: [
        {x: 'Programadas', y: 6},
        {x: 'En Proceso', y: 4},
        {x: 'Terminadas', y: 6},
        {x: 'Canceladas', y: 1}
    ],
        xkey: 'x',
        ykeys: ['y'],
        labels: ['Y']
    });

    </script>
</body>

</html>