<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<!-- resources/views/services/create.blade.php -->

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create Service</div>

                        <form action="{{ route('index.servicestore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label mx-3 fw-bold">Name</label>
                                <input type="text" class="form-control"  name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label mx-3 fw-bold">Description</label>
                                <textarea class="form-control"  name="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label mx-3 fw-bold">Image</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mb-2">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>


