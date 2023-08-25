@extends ("menu")
<body>
<div class="container">
    <h1> Ma conso </h1>
    <div class="content">
        <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        };

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options,
        });
    </script>
</div>
</body>

</html>
