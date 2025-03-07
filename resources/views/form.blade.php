<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student Form</title>
</head>

<body>
    <div class="card-body">
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h1 class="text-center">Fill the Form</h1>

                    <div class="">

                        <form class="row g-3" action="{{ route('student.store') }}" method="post"
                            enctype="multipart/form-data">

                            @csrf

                            <label for="">Student Name</label>
                            <input type="text" class="form-control" name="s_name" class="border border-secondary"
                                placeholder="Enter Student Name" aria-label=" input example">
                            <br>

                            <label for="">Student Class Name</label>
                            <input type="text" class="form-control" name="class_name" placeholder="Enter class Name">
                            <br>

                            <label for="">Student Email</label>
                            <input type="email" class="form-control" name="student_email"
                                placeholder="Enter Student Email">

                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" name="phone_number"
                                placeholder="Enter Student Phone number">

                            <input type="submit" class="p-3 mb-2 bg-danger text-white" value="submit"
                                class="form-control">


                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
