@extends ("menu")
@section('content')
<div class="container">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Accueil</title>
    <style>
        .container{
            background-color: #77B5FE;
            max-width: 100%;
            height: 90vh;

        }
        .circle-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 5rem;
        }

        .chart-container {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .notification-container {
            width: 100%;
            text-align: center;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .notification {
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
        .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>


    </style>
    <body>
        <h1 style="text-align: center; font-size:xx-large;  ">Ma conso</h1>
        <div class="content">
                <div class="circle-container">
                    <div class="chart-container">
                        <canvas id="myChart"></canvas>
                    </div>
                    <!-- <i class="fas fa-bolt icon-left"></i>
                    <i class="fas fa-snowflake icon-top"></i>
                    <i class="fas fa-tv icon-right"></i>
                    <i class="fas fa-utensils icon-bottom"></i> -->
                </div>

                <div class="notification-container">
                    <div class="notification">
                        <p>Votre chauffe-eau a consommé le plus durant ce mois de septembre.</p>
                    </div>
                    <div class="notification">
                        <p>Si vous continuez ainsi le mois prochain, vous allez consommer 24 kW.</p>
                    </div>
                </div>
        </div>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');

var data = {
    labels: ['A', 'B', 'C', 'D'],
    datasets: [{
        data: [30, 20, 25, 15],
        backgroundColor: ['red', 'blue', 'green', 'orange'],
    }],
};

var options = {
    responsive: true,
    maintainAspectRatio: false,
    onAnimationComplete: function() {
        var chart = this.chart;
        var ctx = chart.ctx;
        ctx.font = "16px Arial";
        ctx.fillStyle = "black";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";

        var sum = data.datasets[0].data.reduce((a, b) => a + b, 0);
        var midX = (chart.chartArea.left + chart.chartArea.right) / 2;
        var midY = (chart.chartArea.top + chart.chartArea.bottom) / 2;

        var angles = chart.config.data.datasets[0]._meta[0].data.map(data => data._model);
        angles.forEach((angle, index) => {
            var startAngle = angle.startAngle;
            var endAngle = angle.endAngle;
            var midAngle = (startAngle + endAngle) / 2;
            var percentage = (data.datasets[0].data[index] / sum) * 100;
            var value = percentage.toFixed(1) + "%";
            var x = midX + Math.cos(midAngle) * (chart.innerRadius + 40);
            var y = midY + Math.sin(midAngle) * (chart.innerRadius + 40);
            ctx.fillText(value, x, y);
        });
    }
};

var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options,
});
                </script>

    </body>

    </html>
</div>
@endsection
