<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Teacher Form</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 700px;
        background-color: rgb(52, 117, 158);

    }

    .form {
        width: 400px;
        height: 500px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 20px;
        background: #bfc9ca;
        box-shadow: 5px 8px 15px hsla(131, 82%, 36%, 0.1);
    }

    .form label {
        margin-left: 30%;
        color: #8B0000;
        margin-top: 10px;
    }

    .form input {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 15px;
    }

  
</style>

<body>
    <div class="form">

        <form action="{{ route('subject.update') }}" method="post" enctype="multipart/form-data">

            @csrf

            <input type="text" name="subject_id"
            style="width: 100%; padding: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 15px;"
            value="{{ $single_subject->id }}" required hidden>
            
            <label for=""><strong>Subject Name</strong></label>
            <input type="text" name="sub_name" class="form-control"  value="{{ $single_subject->subject_name }}" placeholder="Enter Subject Name" required>

            <label for=""><strong>Favourite Subject </strong></label>
            <input type="text" name="favourite_sub" class="form-control" value="{{ $single_subject->favourite_subject }}" placeholder="Enter Favourite Subject " required>


            <label for=""><strong>Subject Code</strong></label>
            <input type="text" name="sub_code"  class="form-control" value="{{ $single_subject->subject_code }}" placeholder="Enter Subject Code" required>

            <button type="submit"
            style="width: 100%; padding: 10px; background-color: blue; color: white; border: none; border-radius: 20px;">Submit</button>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>





</html>
