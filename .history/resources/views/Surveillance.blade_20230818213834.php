@extends("menu")
@section('content')
    <div class="container">
        <title>Surveillance</title>
        <style>
            body {
                margin-top: 10rem;
                color: #566787;
                background: #77B5FE;
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;
                }

                .table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
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