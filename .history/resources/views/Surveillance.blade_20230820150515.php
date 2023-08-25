@extends("menu")
@section('content')
<div class="container">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Surveillance</title>

    

    <style>
        .table {
            width: 100%;
        }

        /* Add any custom styles here */

    </style>

    <div class="row">
        <div class="col-md-6">
            <select id="data-type">
                <option value="jour">Poste de conso par jour</option>
                <option value="mois">Poste de conso par mois</option>
                <option value="annee">Poste de conso par année</option>
            </select>
            <div class="d-flex justify-content-center" style="padding-top: 30px;">
                <table id="data-table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Pourcentage</th>
                            <th>Kwh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Switch 1</td>
                            <td>5%</td>
                            <td>12</td>
                        </tr>
                        <!-- Add more rows here -->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6">
            <div class="alert alert-info" role="alert">
                l'appareil qui consomme le plus
            </div>
            <canvas id="chart"></canvas>
        </div>
    </div>
</div>


<script>
                    var ctx = document.getElementById('chart').getContext('2d');
                    var data = {
                        // labels: ['Chauffe-eau', 'Climatisation', 'Télé', 'Frigo'],
                        datasets: [{
                            data: [30, 20, 25, 15],
                            backgroundColor: ['red', 'blue', 'green', 'orange'],
                        }],
                    };
                    var options = {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: { display: false },
                        plugins: {
                        datalabels: {
                        color: 'white',
                        anchor: 'end',
                        align: 'end',
                        formatter: function(value, context) {
                            return value + ' kW'; // Format de la valeur
                    }
                    }
                    }
                    };
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: data,
                        options: options,
                    });
</script>
@endsection
