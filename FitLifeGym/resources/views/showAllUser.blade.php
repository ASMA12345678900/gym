<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>FITLIFE GYM</h1>
        <div class="float-right mr-5">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New user</a>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <a href="/trainer" class="list-group-item list-group-item-action">Trainer</a>
                    <a href="/user" class="list-group-item list-group-item-action">USER</a>
                </div>
            </div>
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>user Name</td>
                            <td>user Email</td>
                            <td>Trainer id</td>

                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach ( $user as $m)
                                <tr>
                                    <td>{{ $m->id }}</td>
                                    <td>{{ $m->user_Name }}</td>
                                    <td>{{ $m->user_Email }}</td>
                                    <td>{{ $m->Trainer_id }}</td>


                                    <td><a href="javascript:void(0)" class="btn btn-warning editBtn" data-toggle="modal" data-target="#myModal">Edit</a></td>
                                    <td>
                                        <form action="user/{{ $m->id }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!----------------------------------------- Add new trainer------------------------------------------------------->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">user </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="user" method="POST" id="form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="user_Name">user Name</label>
                            <input type="text" id="Trainer_Name" name="user_Name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">user Email</label>
                            <input type="text" id="user_Email" name="user_Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Trainer_id">Trainer id</label>
                            {{-- <input id="Trainer_id" name="Trainer_id" class="form-control"> --}}
                            <select name="Trainer_id" id="Trainer_id" class="form-control" >
                                <option value="" selected disabled>Select Trainer</option>
                                @foreach ($trainer as $tr)
                                    <option value="{{ $tr->id}}">{{ $tr->Trainer_Name }}</option>
                                @endforeach
                            </select>

                        </div>


                        <div class="form-group">

                            <input type="submit" id="submit" name="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--------------------------------------------------- Editer trainer --------------------------------------------------------------------------- -->


    <script>
        $('.editBtn').click(function(e) {
            Trainer_id = e.target.parentElement.previousElementSibling.innerText;
            user_Email = e.target.parentElement.previousElementSibling.previousElementSibling.innerText;
            user_Name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText;


            id = e.target.parentElement.previousElementSibling.previousElementSibling .previousElementSibling.previousElementSibling.innerText;

        $('#user_Name').val(user_Name);
        $('#user_Email').val(user_Email);
        $('#Trainer_id').val(Trainer_id);
           // Clear the file input field and remove the "required" attribute
        $('#form').attr('action', 'user/' + id);
        $('#form').append('<input type="hidden" name="_method" value="PUT">');

                $('#myModel').modal('show');
        })
    </script>




</body>

</html>
