@extends("menu")
@section('content')
    <div class="container">
        <title>Surveillance</title>
        <style>
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
                padding: 12px 15px;
                vertical-align: middle;
            }

            table.table tr th:first-child {
                width: 60px;
            }
            table.table tr th:last-child {
                width: 100px;
            }
        </style>
        <body>
            <label for="data-type">Sélectionnez le type de données :</label>
                <select id="data-type">
                    <option value="jour">Par jour</option>
                    <option value="mois">Par mois</option>
                    <option value="annee">Par année</option>

                </select>
            <div class="d-flex justify-content-center" style="padding-top: 30px;">
                <table class="table table-striped">
                <thead>
                    <tr>
                                <th>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label>
                                    </span>
                                </th>
                                <th>Nom</th>
                                <th>Pourcentage</th>
                                <th>Kwh</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Switch 1</td>
                    <td>5%</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>Switch 1</td>
                    <td>10%</td>
                    <td>24</td>
                </tr>
                <tr>
                    <td>Switch 1</td>
                    <td>15%</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>Switch 1</td>
                    <td>20%</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>Switch 1</td>
                    <td>25%</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Switch 1</td>
                    <td>30%</td>
                    <td>150</td>
                </tr>

                </tbody>

            </div>

        </body>
    </div>
@endsection
