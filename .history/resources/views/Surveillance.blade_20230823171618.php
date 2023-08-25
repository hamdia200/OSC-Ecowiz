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
                        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">
                            <input placeholder="Select date" type="text" id="example" class="form-control">
                            <label for="example">Try me...</label>
                            <i class="fas fa-calendar input-prefix" tabindex=0></i>
                        </div>

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
                    // Data Picker Initialization
                $('.datepicker').datepicker();
                monthsFull: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                                    'November', 'December'],
                                    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                    weekdaysFull: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                                    weekdaysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                    showMonthsShort: undefined,
                                    showWeekdaysFull: undefined,

                                    // Buttons
                                    today: 'Today',
                                    clear: 'Clear',
                                    close: 'Close',

                                    // Accessibility labels
                                    labelMonthNext: 'Next month',
                                    labelMonthPrev: 'Previous month',
                                    labelMonthSelect: 'Select a month',
                                    labelYearSelect: 'Select a year',

                                    // Formats
                                    format: 'd mmmm, yyyy',
                                    formatSubmit: undefined,
                                    hiddenPrefix: undefined,
                                    hiddenSuffix: '_submit',
                                    hiddenName: undefined,

                                    // Editable input
                                    editable: undefined,

                                    // Dropdown selectors
                                    selectYears: undefined,
                                    selectMonths: undefined,

                                    // First day of the week
                                    firstDay: undefined,

                                    // Date limits
                                    min: undefined,
                                    max: undefined,

                                    // Disable dates
                                    disable: undefined,

                                    // Root picker container
                                    container: undefined,

                                    // Hidden input container
                                    containerHidden: undefined,

                                    // Close on a user action
                                    closeOnSelect: true,
                                    closeOnClear: true,

                                    // Events
                                    onStart: undefined,
                                    onRender: undefined,
                                    onOpen: undefined,
                                    onClose: undefined,
                                    onSet: undefined,
                                    onStop: undefined,

                                    // Classes
                                    klass: {

                                    // The element states
                                    input: 'picker__input',
                                    active: 'picker__input--active',

                                    // The root picker and states *
                                    picker: 'picker',
                                    opened: 'picker--opened',
                                    focused: 'picker--focused',

                                    // The picker holder
                                    holder: 'picker__holder',

                                    // The picker frame, wrapper, and box
                                    frame: 'picker__frame',
                                    wrap: 'picker__wrap',
                                    box: 'picker__box',

                                    // The picker header
                                    header: 'picker__header',

                                    // Month navigation
                                    navPrev: 'picker__nav--prev',
                                    navNext: 'picker__nav--next',
                                    navDisabled: 'picker__nav--disabled',

                                    // Month & year labels
                                    month: 'picker__month',
                                    year: 'picker__year',

                                    // Month & year dropdowns
                                    selectMonth: 'picker__select--month',
                                    selectYear: 'picker__select--year',

                                    // Table of dates
                                    table: 'picker__table',

                                    // Weekday labels
                                    weekdays: 'picker__weekday',

                                    // Day states
                                    day: 'picker__day',
                                    disabled: 'picker__day--disabled',
                                    selected: 'picker__day--selected',
                                    highlighted: 'picker__day--highlighted',
                                    now: 'picker__day--today',
                                    infocus: 'picker__day--infocus',
                                    outfocus: 'picker__day--outfocus',

                                    // The picker footer
                                    footer: 'picker__footer',

                                    // Today, clear, & close buttons
                                    buttonClear: 'picker__button--clear',
                                    buttonClose: 'picker__button--close',
                                    buttonToday: 'picker__button--today'
                                    }
                </script>
            </body>

    @endsection
