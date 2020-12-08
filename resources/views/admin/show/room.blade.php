@extends('layouts.app')

@section('title', 'Rooms')

@section('third_party_stylesheets')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<!--dropzone-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />

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
    <h2 class="mb-4">Rooms Info</h2>
    <!--Create button-->
    <div align=right class="mb-5">
        <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Rooms</button>
    </div>
    <table class="table table-bordered room-datatable datatables-button-formatter" id="room-datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Available_date</th>
                <th>Auto_approve</th>
                <th>Published</th>
                <th>Is_available</th>
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
                    <form method="post" id="room_form" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-6">Name: </label>
                            <div class="col-md-8">
                                <input type="text" name="name" id="name" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-6">Description: </label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-6">Price: </label>
                            <div class="col-md-8">
                                <input type="text" name="price" id="price" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-6">Available_date: </label>
                            <div class="col-md-8">
                                <input type="date" name="available_date" id="available_date" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input type="checkbox" name="auto_approve" id="auto_approve" />
                                <label class="control-label col-md-6">Auto_approve </label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="published" id="published" />
                                <label class="control-label col-md-6">Published</label>
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="is_available" id="is_available" />
                                <label class="control-label col-md-6">Is_available</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="hotel_id" class="form-control" id="hotel_id">
                                <option value="">Select Hotel</option>
                                @foreach ($data as $item)
                                @if (old('hotel_id') == $item->id)
                                <option value={{$item->id}} selected> {{ $item->hotel_name }} </option>
                                @else
                                <option value={{$item->id}}> {{ $item->hotel_name }} </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <br />

                        <!-- print success message after file upload  -->
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                        @endif

                        <!--Photo display ends here-->
                        <div class="form-group row ">
                            <div class="col-md-10">
                                <div id="file" class="dropzone"></div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<!--dropzone-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(function() {

        $('.room-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            autoWidth: false,
            ajax: "{{ route('get.rooms') }}",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'available_date',
                    name: 'available_date'
                },
                {
                    data: 'auto_approve',
                    name: 'auto_approve'
                },
                {
                    data: 'published',
                    name: 'published'
                },
                {
                    data: 'is_available',
                    name: 'is_available'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        /* Edit customer starts here  =>EDIT */
        $(document).on('click', '.edit', function() {
            var id = $(this).attr('id');
            $('#form_result').html('');
            $('#formModal').modal('show');
            $.ajax({
                url: "/admin/room/" + id + "/edit",
                dataType: "json",
                success: function(html) {
                    $('#name').val(html.data.name);
                    $('#description').val(html.data.description);
                    $('#price').val(html.data.price);
                    if (html.data.published == 1) {
                        $('#published').prop('checked', true);
                    }
                    if (html.data.auto_approve == 1) {
                        $('#auto_approve').prop('checked', true);
                    }
                    if (html.data.is_available == 1) {
                        $('#is_available').prop('checked', true);
                    }
                    $('#available_date').val(html.data.available_date);
                    /*$('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='70' class='img-thumbnail' />");
                    $('#store_image').append("<input type='hidden' name='hidden_image' value='" + html.data.image + "' />");*/
                    $('#hidden_id').val(html.data.id);
                    $('.modal-title').text("Edit New Record");
                    $('#action_button').val("Edit");
                    $('#action').val("Edit");
                    $('#formModal').modal('show');
                }
            })
        });
        /* Edit customer ends here */

        //Delete starts here  =>DELETE
        var room_id;

        $(document).on('click', '.delete', function() {
            room_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function() {
            $.ajax({
                url: "/admin/room/destroy/" + room_id,
                beforeSend: function() {
                    $('#ok_button').text('Deleting...');
                },
                success: function(data) {
                    setTimeout(function() {
                        $('#confirmModal').modal('hide');
                        $('#room-datatable').DataTable().ajax.reload(); //Reloads table after deletion
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
        $('#room_form').on('submit', function(event) {
            event.preventDefault();
            if ($('#action').val() == 'Add') {
                $.ajax({
                    url: "{{ route('room.store') }}",
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
                            $('#room_form')[0].reset();
                            $('#room-datatable').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                })
            }

            if ($('#action').val() == "Edit") {
                console.log("edit");
                $.ajax({
                    url: "{{ route('room.update') }}",
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
                            $('#room_form')[0].reset();
                            $('#room-datatable').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            }
        });
        //Form submission ends here


        /**********Dropzone usage  **********/
        var drop = new Dropzone('#file', {
            createImageThumbnails: true,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            parallelUploads: 5,
            url: "{{url('dropzone/store')}}",
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
            },
            success: function(file, response) {
                /********** Attach a hidden input field to store the uploaded files **********/
                $('#file').append('<input type="hidden" name="files[]" value="'+ response.success +'">');
            },
            error: function(file, response) {
                console.log('errorrrr');
                return false;
            },
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    type: 'POST',
                    url: '{{ url("delete-uploaded-image") }}',
                    data: {
                        filename: name
                    },
                    success: function(data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            }
        });
    });
</script>
@stop