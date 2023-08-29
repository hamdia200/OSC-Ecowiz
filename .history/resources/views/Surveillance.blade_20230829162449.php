@extends("menu")
    @section('content')

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    position: relative;
                    width: 350.994px;
                    height: 350.994px;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    padding-left: 20px;
                    padding-right: 20px;
                    justify-content: center;
                }
                .alert{
                    margin-top: 15px;
                    padding: 10px;
                    background: var(--color, #ffffff);
                    border: 1px solid #ccc;
                    border-radius: 30px;
                    float: right;
                }
                .md-form.md-outline {
                    position: relative;
                    overflow-y: auto;
                    box-sizing: border-box;
                    margin-top: 5rem;
                    }
                .input-prefix{
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    right: 10px;

                }
                .chif {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    text-align: center;
                    font-size: 10px;
                    }
                    .graph{
                        position: relative;
                        width: 300px;
                        height: 300px;
                        margin: 3rem;
                    }

            </style>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
            <script>
                var j = $.noConflict();
            </script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
            <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

            </head>
            <body>
                <div class="container">
                    <div class="content">
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                            <input placeholder="Select date" type="text" id="example" class="form-control">
                            <i class="fas fa-calendar input-prefix"></i>
                        </div>

                        <div class="tableau d-flex justify-content-center" style="margin-top: 50px;">

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
                                    <div id="myPlot" style="width:200%;max-width:700px"></div>
                                    <div class="chif">
                                        <h1 style="font-size: 14px; color: var(--primary, #1758EC);">24kw</h1>
                                        <h1 style="font-size: 14px; color: var(--primary, #1758EC);">5000FCFA</h1>
                                    </div>
                                </div>

                                <div class="alert">
                                        <h1>Alertes<i class="fas fa-bell" style="width: 50px; height: 50px; padding-left:50px; padding-right:50px;color:#C52B2B"></i></h1>
                                        <p>L'appareil qui a consommé le plus</p>

                                    </div>
                            </div>

                </div>

                <script>
                    j(function() {
                        // Initialiser le Datepicker
                        var datePicker = j("#example").datepicker({
                        format: "dd/mm/yyyy",
                        autoclose: true,
                        todayHighlight: true
                        });

                        // Ouvrir le Datepicker lorsque l'icône est cliquée
                        j(".input-prefix").click(function() {
                        datePicker.datepicker('show');
                        });
                    });
                </script>
                <script>
                    const xArray = ["Chauffe-eau ", "Climatisation", "Téléviseur","Réfrigerateur","ventilateur","ampoule","Thermostre"];
                    const yArray = [55, 49, 44, 24, 15,24,30];
                        var layout={
                        annotation:[{
                            showarrow:false,
                            text: 'GHG'
                        }
                        ]},


                    const data = [{labels:xArray, values:yArray, hole:.4, type:"pie"}];

                    Plotly.newPlot("myPlot", data);
                </script>
            </body>

    @endsection
