@extends("menu")
@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <title>prediction</title>
    </head>

            <body>

                    <div class="card-body pb-0 pt-3">
                        <div id="financial-technical-partner-contribitions-va"
                            data-colors='["--vz-primary", "--vz-success", "--vz-warning", "--vz-danger"]'
                            class="apex-charts" dir="ltr"></div>
                        </div>

                            <script>
                                function getChartColorsArray(chartId) {
                                if (document.getElementById(chartId) !== null) {
                                    var colors = document.getElementById(chartId).getAttribute("data-colors");
                                    if (colors) {
                                        colors = JSON.parse(colors);
                                        return colors.map(function(value) {
                                            var newValue = value.replace(" ", "");
                                            if (newValue.indexOf(",") === -1) {
                                                var color = getComputedStyle(document.documentElement).getPropertyValue(
                                                    newValue
                                                );
                                                if (color) return color;
                                                else return newValue;
                                            } else {
                                                var val = value.split(",");
                                                if (val.length == 2) {
                                                    var rgbaColor = getComputedStyle(
                                                        document.documentElement
                                                    ).getPropertyValue(val[0]);
                                                    rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                                                    return rgbaColor;
                                                } else {
                                                    return newValue;
                                                }
                                            }
                                        });
                                    } else {
                                        console.warn('data-colors atributes not found on', chartId);
                                    }
                                }
                            }
                        </sc>







            </body>
@endsection


