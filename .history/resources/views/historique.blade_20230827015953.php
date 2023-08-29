@extends("menu")
@section('content')
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Historique</title>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>
<div class="container">


    <h1>Energie(Kwh)</h1>

    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary" onclick="loadChart('24h')">24 Heures</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('7d')">7 Jours</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('30d')">30 Jours</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('3m')">3 Mois</button>
        <button type="button" class="btn btn-primary" onclick="loadChart('12m')">12 Mois</button>
    </div>

    <div class="chart-container mt-4">
        <canvas id="historiqueChart"></canvas>
    </div>

</div>



