@extends("menu")
@section(content)

@endsection

<div class="container">
    <body>


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
                <td>1%</td>
                <td>12</td>
            </tr>

            </tbody>

        </div>

    </body>
</div>
