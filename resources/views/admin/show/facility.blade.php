@extends('layouts.app')

@section('title', 'Facilities')

@section('third_party_stylesheets')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<!-- Aligning the buttons in the table vertically -->
<style>
    td button {
      vertical-align: top !important;
    }
</style>
@stop

@section('content')

<div class="container-fluid pt-5">
    <h2 class="mb-4">Facilities Info</h2>
    <!--Create button-->
    <div align=right class="mb-5">
        <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Facilities</button>
    </div>
    <table class="table table-bordered facility-datatable datatables-button-formatter" id="facility-datatable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
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
                    <form method="post" id="facility_form" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-8 col-md-8 col-sm-8 container justify-content-center">
                             <div class="form-group row">
                                <label for="facility" class="col-sm-3 col-form-label mr-2">Facility</label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" name="facility" id="facility" placeholder="Facility Name">
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

</div>
@stop

@section('third_party_scripts')
<!--Js for datatables-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>--}}
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(function() {

        $('.facility-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            autoWidth: false,
            ajax: "{{ route('get.facilities') }}",
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

        /* Edit facility starts here  =>EDIT */
        $(document).on('click', '.edit', function() {
            var id = $(this).attr('id');
            $('#form_result').html('');
            $('#formModal').modal('show');
            $.ajax({
                url: "/admin/facility/" + id + "/edit",
                dataType: "json",
                success: function(html) {
                     $('#facility').val(html.data.name);
                    $('#hidden_id').val(html.data.id);
                    $('.modal-title').text("Edit New Record");
                    $('#action_button').val("Edit");
                    $('#action').val("Edit");
                    $('#formModal').modal('show');
                }
            })
        });
        /* Edit facility ends here */

        //Delete starts here  =>DELETE
        var facility_id;

        $(document).on('click', '.delete', function() {
            facility_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function() {
            $.ajax({
                url: "/admin/facility/destroy/" + facility_id,
                beforeSend: function() {
                    $('#ok_button').text('Deleting...');
                },
                success: function(data) {
                    setTimeout(function() {
                        $('#confirmModal').modal('hide');
                        $('#facility-datatable').DataTable().ajax.reload(); //Reloads table after deletion
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
        $('#facility_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#action').val() == 'Add') {
                $.ajax({
                    url: "{{ route('facility.store') }}",
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
                            $('#facility_form')[0].reset();
                            $('#facility-datatable').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                })
            }

            if ($('#action').val() == "Edit") {
                console.log("edit");
                $.ajax({
                    url: "{{ route('facility.update') }}",
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
                            $('#facility_form')[0].reset();
                            $('#facility-datatable').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }
        });
        //Form submission ends here
    });
</script>
@stop