<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>priceGym</title>
</head>
<body>
<!-- resources/views/services/create.blade.php -->

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">Create Price</div>

                        <form action="{{ route('index.pricestore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="planName" class="form-label mx-3 fw-bold ">planName</label>
                                <input type="text" class="form-control"  name="planName" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label mx-3 fw-bold ">price</label>
                                <input type="text" class="form-control"  name="price" required>
                            </div>
                            <div class="mb-3">
                                <label for="duration" class="form-label mx-3 fw-bold ">duration</label>
                                <input type="text" class="form-control"  name="duration" required>
                            </div>
                            <div class="mb-3">
                                <label for="personnal_Trainer" class="form-label mx-3 fw-bold ">personnal_Trainer</label>
                                <input type="text" class="form-control"  name="personnal_Trainer" required>
                            </div>
                            <div class="mb-3">
                                <label for="Amount_of_people" class="form-label mx-3 fw-bold ">Amount_of_people</label>
                                <input type="text" class="form-control"  name="Amount_of_people" required>
                            </div>
                            <div class="mb-3">
                                <label for="Number_of_visits" class="form-label mx-3 fw-bold ">Number_of_visits</label>
                                <input type="text" class="form-control"  name="Number_of_visits" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary m-3 ">Create</button>
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


