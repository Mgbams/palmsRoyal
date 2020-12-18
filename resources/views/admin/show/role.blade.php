@extends('layouts.app')

@section('title', 'Roles')

@section('third_party_stylesheets')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

@stop

@section('content')
<!--image upload errors-->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry !</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<!--image upload errors end here-->


<div class="container-fluid mt-5">
    <h2 class="mb-4">Roles</h2>
    <!--Create button-->
    <div align=right class="mb-5">
        <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Roles</button>
    </div>
    <table class="table table-bordered role-datatable datatables-button-formatter" id="role-datatable">
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- Edit Hotel modal -->
    <div id="formModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 60vw !important; margin: 0px auto;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Record</h4>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <form method="post" id="role_form" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-8 col-md-8 col-sm-8 container justify-content-center">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <label class="control-label col-md-6">Name: </label>
                                    <input type="text" name="name" id="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <input type="hidden" name="action" id="action" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <input type="submit" name="action_button" id="action_button" style="border-top-right-radius: 10%; border-bottom-right-radius: 10%; border-top-left-radius: 10%; border-bottom-left-radius: 10%;" class="btn btn-primary px-5" value="Add" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--Modal ends here-->

    <!--Confirm Modal starts here-->
    <div id="confirmModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title">Confirmation</h2>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">Êtes-vous sûr de vouloir supprimer ces données ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!--Confirm Modal ends here-->

    <!-- View modal starts here -->
    <div id="viewModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 60vw !important; margin: 0px auto;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <form method="post" id="view_form" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-8 col-md-8 col-sm-8 container justify-content-center">
                            <div class="form-group">
                                <fieldset class="border p-3">
                                    <legend class="w-auto">Room Management</legend>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="edit-room" value="edit room" id="edit-room"> Edit Room <br />
                                        <input type="checkbox" name="create-room" value="create room" id="create-room"> Create Room <br />
                                        <input type="checkbox" name="delete-room" value="delete room" id="delete-room"> Delete Room <br />
                                    </div>
                                </fieldset>
                            </div>

                            <div class="form-group">
                                <fieldset class="border p-3">
                                    <legend class="w-auto">User Management</legend>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="edit-user" value="edit user" id="edit-user"> Edit User <br />
                                        <input type="checkbox" name="create-user" value="create user" id="create-user"> Create User <br />
                                        <input type="checkbox" name="delete-user" value="delete user" id="delete-user"> Delete User <br />
                                    </div>
                                </fieldset>
                            </div>

                            <div class="form-group">
                                <fieldset class="border p-3">
                                    <legend class="w-auto">Country Management</legend>
                                    <div class="col-md-8">
                                        <input type="checkbox" name="edit-country" value="edit user" id="edit-country"> Edit Country <br />
                                        <input type="checkbox" name="create-country" value="create user" id="create-country"> Create Country <br />
                                        <input type="checkbox" name="delete-country" value="delete user" id="delete-country"> Delete Country <br />
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <input type="hidden" name="action_save" id="action_save" />
                            <input type="hidden" name="save_hidden_id" id="save_hidden_id" />
                            <input type="submit" name="save_button" id="save_button" style="border-top-right-radius: 10%; border-bottom-right-radius: 10%; border-top-left-radius: 10%; border-bottom-left-radius: 10%;" class="btn btn-primary px-5" value="save" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--View Modal ends here-->

</div>
@stop

@section('third_party_scripts')
<!--Js for datatables-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(function() {

        $('.role-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            autoWidth: false,
            ajax: "{{ route('get.roles') }}",
            columns: [{
                    data: 'id',
                    name: 'Id'
                },
                {
                    data: 'name',
                    name: 'Name'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        /* Edit role starts here  =>EDIT */
        $(document).on('click', '.edit', function() {
            var id = $(this).attr('id');
            $('#form_result').html('');
            $('#formModal').modal('show');
            $.ajax({
                url: "/admin/role/" + id + "/edit",
                dataType: "json",
                success: function(html) {
                    if (html.data.name) {
                        $('#name').val(html.data.name);
                    }
                    $('#hidden_id').val(html.data.id);
                    $('.modal-title').text("Edit New Record");
                    $('#action_button').val("Edit");
                    $('#action').val("Edit");
                    $('#formModal').modal('show');
                }
            })
        });
        /* Edit role ends here */

        /* View permission starts here  =>VIEW */
        $(document).on('click', '.view', function() {
            var id = $(this).attr('id');
            var role = $(this).attr('role');
            $('#form_result').html('');
            $('#viewModal').modal('show');

            /*** clearing checkboxes values at each 
             *** click before data is fetched 
             ***/
            $('#edit-room').prop('checked', false);
            $('#create-room').prop('checked', false);
            $('#delete-room').prop('checked', false);
            $('#edit-user').prop('checked', false);
            $('#create-user').prop('checked', false);
            $('#delete-user').prop('checked', false);
            $('#edit-country').prop('checked', false);
            $('#create-country').prop('checked', false);
            $('#delete-country').prop('checked', false);
            $('#modal-title').text('');

            $.ajax({
                url: "/admin/permissions/" + id + "/view",
                dataType: "json",
                success: function(html) {
                    for (let i = 0; i < html.data.length; i++) {
                        /******* room management ******/
                        if (html.data[i].name === 'edit room') {
                            $('#edit-room').prop('checked', true);
                        }
                        if (html.data[i].name == 'create room') {
                            $('#create-room').prop('checked', true);
                        }
                        if (html.data[i].name == 'delete room') {
                            $('#delete-room').prop('checked', true);
                        }

                        /***** User Management *****/
                        if (html.data[i].name === 'edit user') {
                            $('#edit-user').prop('checked', true);
                        }
                        if (html.data[i].name === 'create user') {
                            $('#create-user').prop('checked', true);
                        }
                        if (html.data[i].name === 'delete user') {
                            $('#delete-user').prop('checked', true);
                        }

                        /***** Country Management *****/
                        if (html.data[i].name === 'edit country') {
                            $('#edit-country').prop('checked', true);
                        }
                        if (html.data[i].name === 'create country') {
                            $('#create-country').prop('checked', true);
                        }
                        if (html.data[i].name === 'delete country') {
                            $('#delete-country').prop('checked', true);
                        }
                    }
                    $('#modal-title').text(role + ' Permissions');
                    $('#save_hidden_id').val(id);
                    $('#save_button').val("Save Changes");
                    $('#viewModal').modal('show');
                }
            })
        });
        /* View permission ends here */

        //Delete starts here  =>DELETE
        var role_id;

        $(document).on('click', '.delete', function() {
            role_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function() {
            $.ajax({
                url: "/admin/role/destroy/" + role_id,
                beforeSend: function() {
                    $('#ok_button').text('Deleting...');
                },
                success: function(data) {
                    setTimeout(function() {
                        $('#confirmModal').modal('hide');
                        $('#role-datatable').DataTable().ajax.reload(); //Reloads table after deletion
                    }, 2000);
                }
            })
        });
        // Delete ends here

        //Creating a record starts here =>CREATE
        $('#create_record').click(function() {
            $('.modal-title').text("Add New Record");
            $('#action_button').val("Add");
            $('#action').val("Add");
            $('#formModal').modal('show');
        });
        //Creating a record ends here


        /*** Form submission starts here ***/
        $('#role_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#action').val() == 'Add') {
                $.ajax({
                    url: "{{ route('role.store') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function(data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#role_form')[0].reset();
                            $('#role-datatable').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                })
            }

            if ($('#action').val() == "Edit") {
                $.ajax({
                    url: "{{ route('role.update') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function(data) {
                        var html = '';
                        if (data.errors) {
                            html = '<div class="alert alert-danger">';
                            for (var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#role_form')[0].reset();
                            $('#role-datatable').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }
        });
        //Form submission ends here

        /***** Submitting permissions modifications starts here *****/
        $('#view_form').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "/admin/update-permissions",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                    var html = '';
                    if (data.errors) {
                        html = '<div class="alert alert-danger">';
                        for (var count = 0; count < data.errors.length; count++) {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += '</div>';
                    }
                    if (data.success) {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#role_form')[0].reset();
                        $('#role-datatable').DataTable().ajax.reload();
                    }
                    $('#form_result').html(html);
                }
            });
            console.log('view submitted');
        });
    });
</script>
@stop