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
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>

                    <td>Switch 1</td>
                    <td></td>
                    <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>

            </tr>

            </tbody>

        </div>

    </body>
</div>
