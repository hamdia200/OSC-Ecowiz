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
            <label for="data-type">poste de conso </label>
                <select id="data-type">
                    <option value="jour">Par jour</option>
                    <option value="mois">Par mois</option>
                    <option value="annee">Par année</option>

                </select>
            <div class="d-flex justify-content-center" style="padding-top: 30px;">
                <table class="table table-striped">
                            <thead>
                                <tr>
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

        </body>
    </div>
@endsection
