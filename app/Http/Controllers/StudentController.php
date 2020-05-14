<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
  public $students;

  public function __construct()
  {
    $this->students = new Student();
  }

  //get student list
  public function getStudentList()
  {
    $students = $this->students->getAllStudent();
    foreach($students as $s)
    {
      echo $s->name . " - " . $s->id . "<br>";
    }
  }

  //get student by id
  public function getStudentById($id)
  {
    $s = $this->students->getById($id);
    if(isset($s))
    {
        echo 'No such student';
    }
    else {
      echo $s[0]->name . " - " . $s[0]->email . "<br>";
    }
  }

}
