@extends("menu")
    @section('content')

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
            <title>Surveillance</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                    background-color: #C9D6F4;
                }
                .table{
                    border: 2px red solid;
                    width: 200%;
                    height: 400px;
                    flex-shrink: 0;
                    padding-left: 20px;

                }
                table >  * {
                    padding : 12px  ;
                }

                .container{
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-between;
                    margin-top: 10px;

                }

                .chart{
                    flex: 1;
                    margin-top: 3rem;
                    text-align: center;
                    padding: 20px;
                    padding-left: 5px;
                    padding-right: 5px;
                }
                .alert{
                    margin-top: 20px;
                    padding: 10px;
                    background: var(--color, #ffffff);
                    border: 1px solid #ccc;
                    border-radius: 20px;
                    float: right;
                }
                .md-form.md-outline{
                    margin-top: 5rem;
                }
                .content{

                }

            </style>
            </head>
            <body>
                <div class="container">
                    <div class="content">
                            <div>
                                <label for="example-input">Choose a date</label>
                                <b-input-group class="mb-3">
                                <b-form-input
                                    id="example-input"
                                    v-model="value"
                                    type="text"
                                    placeholder="YYYY-MM-DD"
                                    autocomplete="off"
                                ></b-form-input>
                                <b-input-group-append>
                                    <b-form-datepicker
                                    v-model="value"
                                    button-only
                                    right
                                    locale="en-US"
                                    aria-controls="example-input"
                                    @context="onContext"
                                    ></b-form-datepicker>
                                </b-input-group-append>
                                </b-input-group>
                                <p class="mb-1">Value: '{{ value }}'</p>
                                <p class="mb-1">Selected: '{{ selected }}'</p>
                                <p>Formatted: '{{ formatted }}'</p>
                            </div>
                        </template>

                        <div class="tableau d-flex justify-content-center" style="padding-top: 110px;">

                        <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Pourcentage</th>
                                            <th>FCFA/Kwh</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <td>Switch 1</td>
                                                <td>5%</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>Switch 2</td>
                                                <td>10%</td>
                                                <td>24</td>
                                            </tr>
                                            <tr>
                                                <td>Switch 3</td>
                                                <td>15%</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Switch 4</td>
                                                <td>20%</td>
                                                <td>60</td>
                                            </tr>
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
                        </div>
                    </div>

                            <div class="graph">
                                <div class="chart">
                                    <canvas id="myChart"></canvas>
                                </div>

                                <div class="alert">
                                        <h1>Alerte <i class="fas fa-bell" style="width: 50px; height: 50px; padding-left:50px; padding-right:50px;color:#C52B2B"></i></h1>
                                        <p>L'appareil qui a consommé le plus</p>

                                    </div>
                            </div>

                </div>
            <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var data = {
                                    // labels: ['Chauffe-eau', 'Climatisation', 'Télé', 'Frigo'],
                                    datasets: [{
                                        data: [30, 20, 25, 15,30,50,45],
                                        backgroundColor: ['#EE0B0B', '#7963CD', '#63CD81','#5BC7E6','#FF8F78','#BB0B0B','#7F00FF'],
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

                <script>
                        export default {
                            data() {
                            return {
                                value: '',
                                formatted: '',
                                selected: ''
                            }
                            },
                            methods: {
                            onContext(ctx) {
                                // The date formatted in the locale, or the `label-no-date-selected` string
                                this.formatted = ctx.selectedFormatted
                                // The following will be an empty string until a valid date is entered
                                this.selected = ctx.selectedYMD
                            }
                            }
                        }
                //     // Data Picker Initialization
                // $('.datepicker').datepicker();

                </script>
            </body>

    @endsection
