@extends("menu")
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div class="container">
<h1> Ma conso </h1>

    <div class="content">
        <canvas id="mychart"></canvas>

    </div>

</div>


<script>

        var ctx = document.getElementById('mychart')


        var data = {
            labels: ['A', 'B', 'C', 'D'],
            datasets: [{
                data: [30, 20, 25, 15],
                backgroundColor: ['red', 'blue', 'green', 'orange'],
            }],
        };


        var options = {
            responsive: true,
            ma
            intainAsipectRatio: false,
        };

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options,
        });


    </script>

</body>

</html>
