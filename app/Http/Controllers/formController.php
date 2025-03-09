<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formController extends Controller
{
  // Show student form
  function Form()
  {
    return view('form');
  }

  public function storeStudent(Request $request)
  {
    $input = new Student();
    $input->student_name = $request->s_name;
    $input->student_class = $request->class_name;
    $input->student_id = $request->s_id;
    $input->student_email = $request->student_email;
    $input->phone_number = $request->phone_number;
    $input->save();

    return redirect()->route('student.show');
  }


  public function showStudent()
  {
    $students = Student::all();
    return view('show-student', compact('students'));
  }
  public function create()
  {
    $students = Student::all();

    return view('create_teacher', compact('students'));
  }
  public function storeTeacher(Request $request)
  {
    $input = new Teacher();
    $input->teacher_name = $request->teacher_name;
    $input->t_age = $request->teacher_age;
    $input->t_email = $request->teacher_email;
    $input->t_gender = $request->teacher_gender;
    $input->t_number = $request->teacher_number;
    $input->t_dept = $request->teacher_dept;
    $input->t_salary = $request->teacher_salary;
    $input->student_id = $request->student_id;

    if ($request->hasFile('dept_image')) {
      $path = 'uploads/' . date('Y/m/d') . '/';
      $imageName = uniqid() . '.webp';
      $request->file('dept_image')->move($path, $imageName);
      $input->dept_img = $path . $imageName;
    }

    if ($request->hasFile('teacher_image')) {
      $path = 'uploads/' . date('Y/m/d') . '/';
      $imageName = uniqid() . '.webp';
      $request->file('teacher_image')->move($path, $imageName);
      $input->teacher_image = $path . $imageName;
    }

    $input->save();
    return redirect()->route('teacher.show');
  }


  // 
  public function showTeacher()
  {


    $teachers = DB::table('teachers')
      ->select('teachers.*', 'students.id as student_id', 'students.student_name as student_name')
      ->leftJoin('students', 'teachers.student_id', '=', 'students.id')
      ->get();


    $students = Student::all();


    return view('show_teacher', compact('teachers', 'students'));
  }

  // teacher delete
  public function teacherDelete($id)
  {

    // Find the teacher by ID and delete
    $teacher = Teacher::findOrFail($id); // Ensures teacher exists, otherwise throws 404
    $teacher->delete();

    // Redirect with a success message
    return redirect()->route('teacher.show')->with('success', 'Teacher deleted successfully.');
  }
}
