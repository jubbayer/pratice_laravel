<?php

namespace App\Http\Controllers;

use App\Models\Student;

use App\Models\teacher;


use Illuminate\Http\Request;

class formController extends Controller
{
  function Form()
  {
    return view('form');
  }

  public function storeStudent(Request $request){

    $input=new Student();

    $input->student_name=$request->s_name;
    $input->student_class=$request->class_name;
    $input->student_email=$request->student_email;
    $input->phone_number=$request->phone_number;

    $input->save();

  }

  public function showStudent(){


    $students=Student::get();

    return view('show-student',compact('students'));

  }
  
  // teacher table controller

  
  function create()
  {
    return view('create_teacher');
  }

  public function storeTeacher(Request $request)
  {

    $input=new teacher();

    $input->teacher_name=$request->teacher_name;
    $input->t_age=$request->teacher_age;
    $input->t_email=$request->teacher_email;
    $input->t_gender=$request->teacher_gender;
    $input->t_number=$request->teacher_number;
    $input->t_dept=$request->teacher_dept;
    $input->t_salary=$request->teacher_salary;


    if ($request->hasFile('teacher_image')) {

      $path = 'uploads/' . date('Y/m/d') . '/';

      $imageName = uniqid() . '.webp';

      $request->file('teacher_image')->move($path, $imageName);
      
      $input->teacher_image = $path . $imageName;
  }

    $input->save();

  }
  public function showTeacher(){


    $teachers=teacher::get();

    return view('show_teacher',compact('teachers'));

  }

}
