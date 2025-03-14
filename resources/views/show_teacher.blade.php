<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-dark table-striped" >
                    <thead>
                        <tr>
                            <th  scope="col">Teacher Name</th>
                            <th  scope="col">Age</th>
                            <th  scope="col">Email</th>
                            <th  scope="col">Gender</th>
                            <th  scope="col">Subject Name</th>
                            <th  scope="col">Student Name</th>
                            <th  scope="col">phone  Number</th>
                    
                            <th  scope="col">Department image</th>                       
                            <th  scope="col">Salary</th>
                            <th  scope="col">Teacher image</th>
                            <th  scope="col">class name</th>
                            <th  scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr  >
                                <th>{{$teacher->teacher_name}}</th>
                                <th>{{$teacher->t_age}}</th>
                                <th>{{$teacher->t_email}}</th>
                                <th>{{$teacher->t_gender}}</th>
                                <td>{{$teacher->subject_id }}</td>
                                <th>{{$teacher->student_name}}</th>
                                <th>{{$teacher->t_number}}</th>
                                
                                
                            
                             

                                {{-- <td>{{$teacher->dept_img}}</td> --}}
                                <td><img src="{{ asset('/'.$teacher->dept_img) }}" alt="" width="50px" height="50px" style=" border-radius: 15px;" ></td>


                                <td>{{$teacher->t_salary}}</td>


                                <td><img src="{{ asset('/'.$teacher->teacher_image) }}" alt=""  width="50px" height="50px" style=" border-radius: 15px;" ></td>
                                {{-- <td>{{$teacher->teacher_image}}</td> --}}

                                <td>{{$teacher->class_name}}</td>


                                <td><div class="btn-group">
                                    <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-primary">Edit</a>
                                    
                                    <a href="{{ route('teacher.delete', $teacher->id) }}" class="btn btn-danger">Delete</a>

                                  </div></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>
