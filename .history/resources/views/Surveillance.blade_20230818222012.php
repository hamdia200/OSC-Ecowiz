@extends("menu")
@section('content')
    <div class="container">
        <title>Surveillance</title>
        <style>
            .table{
                width: 100%;
            }


        </style>
        <body>
            <label for="data-type">Sélectionnez le type de données :</label>
                <select id="data-type">
                    <option value="jour">Par jour</option>
                    <option value="mois">Par mois</option>
                    <option value="annee">Par année</option>

                </select>
                <div id="demo-output" style="margin-bottom: 1em;" class="chart-display"></div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>

            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>

            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>


        </tbody>
    </table>
        </body>
    </div>
@endsection
