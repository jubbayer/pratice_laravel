
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <title>Teacher Form</title>
  </head>
  <body style="display: flex; justify-content: center; align-items: center; height: 750px; background-color: hsl(207, 82%, 2%);">

    <div style="width: 400px; padding: 20px; border: 1px solid #ddd; border-radius: 20px; background: #bfc9ca; box-shadow: 5px 8px 15px hsla(131, 82%, 36%, 0.1);">

        <h4 style="text-align: center; color: blue;">Teacher Form</h4>


        <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">

            
            @csrf

            <label style="color: Dark;"><strong>Teacher Name</strong></label>
            <input type="text" name="teacher_name" style="width: 100%; padding: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 15px;" placeholder="Enter Teacher Name" required>

            <label><strong>Age</strong></label>
            <input type="text" name="teacher_age" style="width: 100%; padding: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 15px;" placeholder="Enter Age" >

            <label><strong>Email address</strong></label>
            <input type="email" name="teacher_email" style="width: 100%; padding: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 15px;" placeholder="Email address">

            <label><strong>Gender</strong></label>
            <select name="teacher_gender" style="width: 100%; padding: 5px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 15px;">
                
                <option value="male" selected>Male</option>
                <option value="female">Female</option>
                <option value="custom">Custom</option>
            </select>

            <label><strong>Phone Number</strong></label>
            <input type="text" name="teacher_number" style="width: 100%; padding: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 15px;" placeholder="Enter Phone Number">

            <label><strong>Department Name</strong></label>
            <input type="text" name="teacher_dept" style="width: 100%; padding: 5px; margin-bottom: 0px; border: 1px solid #ccc; border-radius: 15px;" placeholder="Enter Department Name">

            <label><strong>Salary</strong></label>
            <input type="text" name="teacher_salary" style="width: 100%; padding: 5px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 15px;" placeholder="Enter Salary">


            <label><strong>Image</strong></label>

            <input type="file" name="teacher_image" class="form-control">

            <button type="submit" style="width: 100%; padding: 10px; background-color: blue; color: white; border: none; border-radius: 20px;">Submit</button>
        </form>
        <br>

        <p style="margin-left:50px;"><strong>Please help us by providing us with<p style="color: hsl(350, 89%, 46%); margin-left:70px;"><strong>your correct information.</strong></p></strong></p>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
