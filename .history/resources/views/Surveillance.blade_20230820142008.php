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
        <!-- Data rows will be populated here -->
      </tbody>
    </table>
    <div class="row">
      <div class="col-md-6">
        <canvas id="chart"></canvas>
      </div>
      <div class="col-md-6">
        <div class="alert alert-info" role="alert">
          This is a Bootstrap alert.
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Your DataTable initialization and data population code here

    // Your Chart.js code to create a chart based on data from the table

    // Any additional JavaScript code you need
  </script>


        </body>
    </div>
@endsection
