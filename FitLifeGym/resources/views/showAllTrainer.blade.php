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
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Trainer</a>
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
                            <td>Trainer Name</td>
                            <td>Trainer Email</td>
                            <td>Trainer speciality</td>
                            <td>Trainer description</td>
                            <td>Trainer image</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainer as $t)
                            <tr>
                                <td>{{ $t->id }}</td>
                                <td>{{ $t->Trainer_Name }}</td>
                                <td>{{ $t->Trainer_Email }}</td>
                                <td>{{ $t->Trainer_Speciality }}</td>
                                <td>{{ $t->Trainer_Description }}</td>
                                <td>
                                    <img src="{{ asset('public/upload/' . $t->Trainer_Image) }}" alt="">
                                </td>
                                <td><a href="javascript:void(0)" class="btn btn-warning editBtn" data-toggle="modal" data-target="#myModal">Edit</a></td>
                                <td>
                                    <form action="trainer/{{ $t->id }}" method="POST">
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
                    <h4 class="modal-title">Trainer </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="trainer" method="POST" id="form" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="Trainer_Name">Trainer Name</label>
                            <input type="text" id="Trainer_Name" name="Trainer_Name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Trainer Email</label>
                            <input type="text" id="Trainer_Email" name="Trainer_Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Trainer Speciality</label>
                            <input type="text" id="Trainer_Speciality" name="Trainer_Speciality" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Trainer_Description">Trainer Description</label>
                            <textarea id="Trainer_Description" name="Trainer_Description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Trainer Image</label>
                            <input type="file" id="Trainer_Image" name="Trainer_Image" class="form-control">
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
            name = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText;
            email = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText;
            speciality = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText;
            description =e.target.parentElement.previousElementSibling.previousElementSibling.innerText;
            image = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.previousElementSibling.innerText;

            id = e.target.parentElement.previousElementSibling.previousElementSibling.previousElementSibling
                .innerText;

            $('#Trainer_Name').val(name);
            $('#Trainer_Email').val(email);
            $('#Trainer_Speciality').val(speciality);
            $('#Trainer_Description').val(description);
            $('#Trainer_Image').val('').removeAttr('required');

            $('#form').attr('action', 'trainer/' + id);
            $('#form').append('<input type="hidden" name="_method" value="PUT">');

            $('#myModel').modal('show');



        });
    </script>





</body>

</html>
