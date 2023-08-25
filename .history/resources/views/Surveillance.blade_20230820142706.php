@extends("menu")
@section('content')
    <div class="container">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Surveillance</title>
        <table id="data-table" class="table table-striped">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Pourcentage</th>
          <th>kWh</th>
        </tr>
      </thead>
      <tbody>

      <tr>
        <td>Switch 5</td>
         <td>25%</td>
         <td>100</td>
      </tr>
        <tr>
            <td>Switch 6</td>
            <td>30%</td>
            <td>150</td>
        </tr>
      </tbody>
    </table>
    <div class="row">
      <div class="col-md-6">
        <canvas id="chart"></canvas>
      </div>
      <div class="col-md-6">
        <div class="alert alert-info" role="alert">
          L'appareil qui a consommé le plus
        </div>
      </div>
    </div>
  </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
                var ctx = document.getElementById('myChart').getContext('2d');
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


        </body>
    </div>
@endsection
