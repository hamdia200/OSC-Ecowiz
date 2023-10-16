@extends ("menu")
@section('content')
<head>
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
    <script src="script.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
        margin-top: 10rem;
        color: #566787;
        background-color: #93ABE1;
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
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
    .table-title .btn-group {
        float: right;
    }
    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }
    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }
    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }
    table.table tr th, table.table tr td {
        border-color: #7990C5;;
        padding: 12px 15px;
        vertical-align: middle;
    }
    table.table tr th:first-child {
        width: 60px;
    }
    table.table tr th:last-child {
        width: 100px;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }
    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
    }
    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
    }
    table.table td a:hover {
        color: #2196F3;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {
        background: #0397d6;
    }
    .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
    /* Custom checkbox */
    .custom-checkbox {
        position: relative;
    }
    .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
    }
    .custom-checkbox label:before{
        width: 18px;
        height: 18px;
    }
    .custom-checkbox label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
    }
    .custom-checkbox input[type="checkbox"]:checked + label:after {
        content: '';
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
    }
    .custom-checkbox input[type="checkbox"]:checked + label:before {
        border-color: #03A9F4;
        background: #03A9F4;
    }
    .custom-checkbox input[type="checkbox"]:checked + label:after {
        border-color: #fff;
    }
    .custom-checkbox input[type="checkbox"]:disabled + label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
    }
    /* Modal styles */
    .modal .modal-dialog {
        max-width: 400px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
        padding: 20px 30px;
    }
    .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
    }
    .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
    }
    .modal .modal-title {
        display: inline-block;
    }
    .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
    }
    .modal textarea.form-control {
        resize: vertical;
    }
    .modal .btn {
        border-radius: 2px;
        min-width: 100px;
    }
    .modal form label {
        font-weight: normal;
    }
    .btn i.fas {
        margin-right: 5px;

    }

    .text-end{
        float:right;
        margin-top: 5rem;
    }

        .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }

    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #2196F3;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }

    .input-group-append {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        .input-group {
            position: relative;
        }
        #timeInput {
        max-width: 110px;
        }


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

        // type="text/javascript">
        //         $(function () {
        //             $('#datetimepicker3').datetimepicker({
        //                 format: 'LT'
        //             });
        //         });


        $(document).ready(function () {
            $('.timepicker').timepicker({
                showSeconds: false,
                showMeridian: false,
                defaultTime: false,
                showWidget:true,
                toolbarPlacement: 'bottom',
                showClose: true,
            });
        });
    </script>
    <script>
            document.getElementById("toggle").addEventListener("change", function() {
        var toggleInner = this.nextElementSibling.querySelector(".toggle-inner");

        if (this.checked) {
            toggleInner.style.left = "calc(100% - 1px)";
            // Gérer l'état activé ici
        } else {
            toggleInner.style.left = "1px";
            // Gérer l'état désactivé ici
        }
        });


    </script>




    <script>
        $(document).ready(function () {
        $('.toggle-btn').click(function () {
            var button = $(this);
            var currentState = button.data('state');

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

    <script>
    $(document).ready(function() {
        $('#timeInput').on('change', function() {
            var selectedTime = $(this).val();
            console.log('Heure sélectionnée:', selectedTime);
        });
    });
</script>

<script>
    $(document).ready(function () {
        // Récupérez le jeton CSRF à partir de la balise meta
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('.equipment-switch').change(function () {
            console.log('Interrupteur individuel changé');
            var equipmentId = $(this).data('id');
            var newState = this.checked ? 1 : 0; // Nouvel état (1 pour activé, 0 pour désactivé)

            // Envoyer la demande POST à Laravel pour mettre à jour l'état dans la base de données
            $.ajax({
                url: '/update-equipment-state', // URL de la route Laravel pour mettre à jour l'état dans la base de données
                method: 'POST',
                data: {
                    equipmentId: equipmentId,
                    newState: newState,
                    _token: csrfToken // Ajoutez le jeton CSRF à la demande
                },
                success: function (response) {
                    // Réponse du serveur après la mise à jour dans la base de données
                    console.log(response);

                    // Envoyer une demande POST à l'ESP32 pour mettre à jour son état
                    $.ajax({
                        url: 'http://192.168.43.89/', // URL de l'ESP32 pour mettre à jour l'état
                        method: 'POST',
                        data: {
                            equipmentId: equipmentId,
                            newState: newState
                        },
                        success: function (espResponse) {
                            // Réponse de l'ESP32 après la mise à jour de l'état
                            console.log(espResponse);
                        },
                        error: function (espXhr, espStatus, espError) {
                            // Gestion des erreurs de communication avec l'ESP32
                            console.error(espXhr.responseText);
                        }
                    });
                },
                error: function (xhr, status, error) {
                    // Gestion des erreurs de mise à jour dans la base de données
                    console.error(xhr.responseText);
                }
            });
        });

        // Lorsque la case à cocher globale est changée
        $('#selectAll').change(function () {
            var isChecked = this.checked;

            // Mettez à jour toutes les cases à cocher individuelles
            $('table tbody input[type="checkbox"]').prop('checked', isChecked);

            // Envoyez la demande POST à Laravel pour mettre à jour l'état dans la base de données
            $('table tbody input[type="checkbox"]').each(function () {
                var equipmentId = $(this).val();
                var newState = isChecked ? 1 : 0;

                $.ajax({
                    url: '/update-equipment-state',
                    method: 'POST',
                    data: {
                        equipmentId: equipmentId,
                        newState: newState,
                        _token: csrfToken // Ajoutez le jeton CSRF à la demande
                    },
                    success: function (response) {
                        // Réponse du serveur
                        console.log(response);

                        // Envoyez une demande POST à l'ESP32 pour mettre à jour son état
                        $.ajax({
                            url: 'http://192.168.43.89/',
                            method: 'POST',
                            data: {
                                equipmentId: equipmentId,
                                newState: newState
                            },
                            success: function (espResponse) {
                                // Réponse de l'ESP32 après la mise à jour de l'état
                                console.log(espResponse);
                            },
                            error: function (espXhr, espStatus, espError) {
                                // Gestion des erreurs de communication avec l'ESP32
                                console.error(espXhr.responseText);
                            }
                        });
                    },
                    error: function (xhr, status, error) {
                        // Gestion des erreurs de mise à jour dans la base de données
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    });
</script>






</head>
<body>

<div class="" style="padding-top: 30px;">

    <div class="input-group date justify-content-end">
        <span class="input-group-addon timepicker">
            <input type="time" class="form-control" id="timeInput" required>
            <!-- <i class="fa fa-clock-o" style="width: 30px; height:30px"></i> -->
        </span>
    </div>

        <table id="equipmentTable" class="table table-striped">
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="equipmentTableBody">
                @foreach ($equipments as $equipment)
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox{{ $equipment->id }}" name="options[]" value="{{ $equipment->id }}">
                                <label for="checkbox{{ $equipment->id }}"></label>
                            </span>
                        </td>
                        <td>{{ $equipment->name }}</td>
                        <td>
                            <label class="switch">
                                <input type="checkbox" id="switch{{ $equipment->id }}" class="equipment-switch" data-id="{{ $equipment->id }}" @if ($equipment->etat == 1) checked @endif>
                                <span class="slider round"></span>
                            </label>
                        </td>
                        <td>
                            <a href="#editEmployeeModal{{ $equipment->id }}" class="edit" data-toggle="modal" data-id="{{ $equipment->id }}">
                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                            </a>
                            <a href="#deleteEmployeeModal{{ $equipment->id }}" class="delete" data-toggle="modal" data-id="{{ $equipment->id }}">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                            </a>
                        </td>
                    </tr>

                    <!-- Modal d'édition spécifique à chaque équipement -->
                    <div id="editEmployeeModal{{ $equipment->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editForm{{ $equipment->id }}">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Éditer l'équipement</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name{{ $equipment->id }}">Nom de l'appareil</label>
                                            <input type="text" class="form-control" id="name{{ $equipment->id }}" name="name" value="{{ $equipment->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="startTime{{ $equipment->id }}">Heure de début</label>
                                            <input type="datetime-local" class="form-control" id="startTime{{ $equipment->id }}" name="startTime" required>
                                            <input type="checkbox" id="deleteStartTime{{ $equipment->id }}" name="deleteStartTime" value="1">
                                            <label for="deleteStartTime{{ $equipment->id }}">Supprimer l'heure de début</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="endTime{{ $equipment->id }}">Heure de fin</label>
                                            <input type="datetime-local" class="form-control" id="endTime{{ $equipment->id }}" name="endTime" required>
                                            <input type="checkbox" id="deleteEndTime{{ $equipment->id }}" name="deleteEndTime" value="1">
                                            <label for="deleteEndTime{{ $equipment->id }}">Supprimer l'heure de fin</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                                        <button type="button" class="btn btn-info" onclick="updateEquipment({{ $equipment->id }})">Sauvegarder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- Modal de suppression spécifique à chaque équipement -->
                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal{{ $equipment->id }}" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="deleteForm{{ $equipment->id }}">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Supprimer l'équipement</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Êtes-vous sûr de vouloir supprimer cet équipement ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Annuler">
                                        <button type="button" class="btn btn-danger" onclick="deleteEquipment({{ $equipment->id }})">Supprimer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                @endforeach
            </tbody>

        </table>


    </div>
</div>
<div class="text-end">
    <button type="submit" class="btn btn-success">
        <i class="fas fa-power-off"></i>
    </button>

    <button type="submit" class="btn btn-danger">
        <i class="fas fa-power-off"></i>
    </button>
</div>

<!-- À l'intérieur de votre fichier JavaScript (par exemple, custom.js) -->
<script>
    // Fonction pour supprimer un équipement
    function deleteEquipment(equipmentId) {
        if (confirm("Êtes-vous sûr de vouloir supprimer cet équipement ?")) {
            // Envoyer une requête AJAX pour supprimer l'équipement
            $.ajax({
                url: '/equipments/' + equipmentId, // Remplacez '/equipments/' par l'URL appropriée pour la suppression
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}', // Ajoutez le jeton CSRF
                },
                success: function (response) {
                    // Mettez à jour la page ou effectuez d'autres actions nécessaires
                    alert(response.message); // Afficher un message de confirmation
                    // Vous pouvez recharger la page ou mettre à jour la liste d'équipements, par exemple
                    location.reload();
                },
                error: function (xhr, status, error) {
                    // Gérer les erreurs en cas d'échec de la suppression
                    alert('Erreur lors de la suppression de l\'équipement : ' + xhr.responseText);
                }
            });
        }
    }
</script>

<script>
    // Fonction pour mettre à jour l'équipement
        function updateEquipment(equipmentId) {
        var newName = $("#name" + equipmentId).val();
        var newStartTime = $("#startTime" + equipmentId).val();
        var newEndTime = $("#endTime" + equipmentId).val();

            // Vérifiez si les cases à cocher de suppression sont cochées
        var deleteStartTime = $("#deleteStartTime" + equipmentId).is(":checked");
        var deleteEndTime = $("#deleteEndTime" + equipmentId).is(":checked");

        // Si les cases à cocher sont cochées, définissez les valeurs sur vide
        if (deleteStartTime) {
            newStartTime = "";
        }
        if (deleteEndTime) {
            newEndTime = "";
        }

        // Vérifiez si les champs requis sont vides
        if (!newName || !newStartTime || !newEndTime) {
            alert("Veuillez remplir tous les champs requis.");
            return;
        }
        
        // Envoyer une requête AJAX pour mettre à jour l'équipement
        $.ajax({
            url: '/equipments/' + equipmentId, // Remplacez '/equipments/' par l'URL appropriée pour la mise à jour
            type: 'PUT', // Utilisez la méthode PUT pour la mise à jour
            data: {
                _token: '{{ csrf_token() }}', // Ajoutez le jeton CSRF
                name: newName,
                startTime: newStartTime,
                endTime: newEndTime
            },
            success: function (response) {
                // Mettez à jour la page ou effectuez d'autres actions nécessaires
                alert(response.message); // Afficher un message de confirmation
                // Vous pouvez recharger la page ou mettre à jour la liste d'équipements, par exemple
                location.reload();
            },
            error: function (xhr, status, error) {
                // Gérer les erreurs en cas d'échec de la mise à jour
                alert('Erreur lors de la mise à jour de l\'équipement : ' + xhr.responseText);
            }
        });
    }

</script>



</div>
</body>
</html>
@endsection


