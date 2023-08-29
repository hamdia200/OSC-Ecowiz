@extends ("menu")
<div class="container">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Regulation de l'électricité</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>


</style>

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});

    type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });


// $(document).ready(function () {
//     $('.timepicker').timepicker({
//         showSeconds: false,
//         showMeridian: false,
//         defaultTime: false,
//         showWidget:true,
//         toolbarPlacement: 'bottom',
//         showClose: true,
//     });
// });
</script>
<script>
    $(document).ready(function () {
    // Gérer le clic sur le bouton de basculement
    $('.toggle-btn').click(function () {
        var button = $(this);
        var currentState = button.data('state');

        // Basculez l'état et mettez à jour le bouton
        if (currentState === 'on') {
            button.removeClass('btn-success').addClass('btn-danger');
            button.find('fa').removeClass('fa-toggle-on').addClass('fa-toggle-off');
            button.data('state', 'off');
        } else {
            button.removeClass('btn-danger').addClass('btn-success');
            button.find('.fa').removeClass('fa-toggle-off').addClass('fa-toggle-on');
            button.data('state', 'on');
        }
    });
});


</script>
</head>
<body>

<div class="" style="padding-top: 30px;">

                <div class='input-group date' id='datetimepicker3'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
    <!-- <div class="input-group date justify-content-end">
        <span class="input-group-addon timepicker">
            <i class="fa fa-clock-o" style="width: 30px; height:30px"></i>
        </span>
    </div> -->

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
                        <th>État</th>
                        <th>Horaire</th>
                        <th>Action</th>
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
                    <td><button class="toggle-btn btn btn-sm btn-success" data-state="on">
                        <i class="fa fa-toggle-on"></i>

                        <i class="fa fa-toggle-off" style="display: none;"></i>
                    </button></td>
                    <td>Switch 1</td>
                    <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>

            </tr>

            <tr>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>

                    <td>Switch 2</td>
                    <td><button class="toggle-btn btn btn-sm btn-success" data-state="on">
                        <i class="fa fa-toggle-on"></i>

                        <i class="fa fa-toggle-off" style="display: none;"></i>
                    </button></td>
                    <td>Switch 1</td>
                    <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>

            </tr>

            <tr>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>

                    <td>Switch 3</td>
                    <td><button class="toggle-btn btn btn-sm btn-success" data-state="on">
                        <i class="fa fa-toggle-on"></i>

                        <i class="fa fa-toggle-off" style="display: none;"></>
                    </button></td>
                    <td>Switch 1</td>
                    <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>

            </tr>


            <tr>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>

                    <td>Switch 4</td>
                    <td><button class="toggle-btn btn btn-sm btn-success" data-state="on">
                        <i class="fa fa-toggle-on"></i>

                        <i class="fa fa-toggle-off" style="display: none;"></i>
                    </button></td>
                    <td>Switch 1</td>
                    <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>

            </tr>

            <tr>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>

                    <td>Switch 5</td>
                    <td><button class="toggle-btn btn btn-sm btn-success" data-state="on">
                        <i class="fa fa-toggle-on"></i>

                        <i class="fa fa-toggle-off" style="display: none;"></i>
                    </button></td>
                    <td>Switch 1</td>
                    <td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>

            </tr>
        </tbody>
    </table>
    </div>
</div>
<div class="text-end">
    <button type="submit" class="btn btn-success">
        <i class="fas fa-power-off"></i>
    </button>

    <!-- Bouton pour Éteindre -->
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-power-off"></i>
    </button>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Edit regulation</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                    <div class="form-group">
						<label>Nom appareil</label>
						<input type="text" placeholder="Switch"   class="form-control" required>
					</div>
					<div class="form-group">
						<label>Heure de debut</label>
						<input type="datetime-local" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Heure de fin</label>
						<input type="datetime-local" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Delete Regulation</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Etes-vous sur de supprimer ?</p>
					<!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>


