
@extends ("menu")
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Regulation de l'électricité</title>
    <!-- Inclure les liens vers les bibliothèques et les fichiers CSS/JS externes -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
</head>
<body>
    <div class="container">
        <!-- Tableau des interrupteurs -->
        <div class="table-responsive">
            <div class="table-wrapper">
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


                        @foreach($interrupteurs as $interrupteur)
                        <tr data-switch-id="{{ $loop->index + 1 }}">
                            <td>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="{{ $interrupteur['nom'] }}" name="options[]" value="{{ $interrupteur['nom'] }}">
                                    <label for="{{ $interrupteur['nom'] }}"></label>
                                </span>
                            </td>
                            <td>{{ $interrupteur['nom'] }}</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" @if($interrupteur['etat'] == 'on') checked @endif>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td><i class="fas fa-clock"></i></td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Boutons de commande -->
        <div class="text-end" style="margin-top: 5rem;">
            <button type="submit" class="btn btn-success"><i class="fas fa-power-off"></i> Activer</button>
            <button type="submit" class="btn btn-danger"><i class="fas fa-power-off"></i> Désactiver</button>
        </div>
    </div>

    <!-- Modals pour l'édition et la suppression -->
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
                            <input type="text" placeholder="Switch" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Heure de début</label>
                            <div class="input-group">
                                <input type="datetime-local" class="form-control" required>
                                <span class="input-group-append">
                                    <button class="btn btn-outline-danger" type="button" id="deleteStartTime">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Heure de fin</label>
                            <div class="input-group">
                                <input type="datetime-local" class="form-control" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-danger" type="button" id="deleteEndTime">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
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
                        <p>Etes-vous sûr de supprimer ?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Inclure les scripts JavaScript externes -->
    <script>
$(document).ready(function () {
    $('.switch input[type="checkbox"]').change(function () {
        var switchCheckbox = $(this);
        var switchContainer = switchCheckbox.closest('tr');
        var switchId = switchContainer.data('switch-id');

        if (switchCheckbox.is(':checked')) {
            envoyerCommande(switchId, 'on');
        } else {
            envoyerCommande(switchId, 'off');
        }
    });

    $('#toggleOnBtn').click(function () {
        envoyerCommandeTous('on');
    });

    $('#toggleOffBtn').click(function () {
        envoyerCommandeTous('off');
    });
});

function envoyerCommande(id, command) {
    fetch("/commande", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ command: command, id: id }),
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.message);
    })
    .catch(error => {
        console.error("Erreur lors de l'envoi de la commande:", error);
    });
}

function envoyerCommandeTous(command) {
    fetch("/commande-tous", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ command: command }),
    })
    .then(response => response.json())
    .then(data => {
        console.log(data.message);
    })
    .catch(error => {
        console.error("Erreur lors de l'envoi de la commande:", error);
    });
}
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <!-- Inclure FontAwesome (si nécessaire) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>

