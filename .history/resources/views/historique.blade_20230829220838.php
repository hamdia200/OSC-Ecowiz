@extends("menu")
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historiques</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .container{
            background: var(--color, #C9D6F4);
            background-color: #C9D6F4;
            max-width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .text{
            border-radius: 10px;
            border-style: solid;
            border-color: #000000;
            border-width: 0.1px;
            width: 599px;
            height: 49px;
            position: relative;
            margin-top: 3rem;
        }
        .charts{
            width: 594px;
            height: 471px;
            flex-shrink: 0;
            margin-top: 5rem;
            padding-left: 20px;
            padding-right: 20px;
        }

        .content{

        }
    </style>


</head>
<body>


    <div class="container">
    <div class="row">

<!-- Grid column -->
<div class="col-md-12 mb-4">

  <div class="card">
    <div class="card-body pl-0 pr-2 pb-0">
      <div class="float-left white-text pl-4">
        <p class="font-weight-light mb-1 mt-n1 text-white-50 font-small">Total Shipments</p>
        <h2 class="font-weight-light">Performance</h2>
      </div>
      <div class="btn-group float-right pr-3" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-sm btn-primary" id="accountsData">Accounts</button>
        <button type="button" class="btn btn-sm btn-primary" id="purchasesData">Purchases</button>
        <button type="button" class="btn btn-sm btn-primary" id="sessionsData">Sessions</button>
      </div>
      <canvas id="lineChart" height="90"></canvas>
    </div>
  </div>

</div>
<!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="row">

<!-- Grid column -->
<div class="col-lg-4 col-md-12 mb-4">

  <div class="card">
    <div class="card-body px-2">
      <div class="float-left white-text pl-4">
        <p class="font-weight-light mb-1 mt-n1 text-white-50 font-small">Total Shipments</p>
        <p><i class="far fa-bell pr-2 align-text-top mt-n1 icon icon-blue"></i><span
            class="font-weight-light h3">354,780</span></p>
      </div>
      <canvas id="horizontalBar" height="280"></canvas>
    </div>
  </div>

</div>
<!-- Grid column -->

<!-- Grid column -->
<div class="col-lg-4 col-md-6 mb-4">

  <div class="card">
    <div class="card-body px-2">
      <div class="float-left white-text pl-4">
        <p class="font-weight-light mb-1 mt-n1 text-white-50 font-small">Completed Tasks</p>
        <p><i class="far fa-paper-plane pr-2 align-text-top mt-n1 icon icon-blue"></i><span
            class="font-weight-light h3">14,578</span></p>
      </div>
      <canvas id="lineChartSecond" height="280"></canvas>
    </div>
  </div>

</div>


        <script>

                var ctxL = document.getElementById("lineChart").getContext('2d');
                var myLineChart = new Chart(ctxL, {
                type: 'line',
                data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                label: "My First dataset",
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
                },
                {
                label: "My Second dataset",
                data: [28, 48, 40, 19, 86, 27, 90],
                backgroundColor: [
                    'rgba(0, 137, 132, .2)',
                ],
                borderColor: [
                    'rgba(0, 10, 130, .7)',
                ],
                borderWidth: 2
                }
                ]
            },
            options: {
                responsive: true
            }
            });
        </script>



    </div>
</body>
</html>
@endsection
