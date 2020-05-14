<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Student;

class MainController extends Controller
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

  //test DB connection
  public function testConnection()
  {
    try {
        DB::connection()->getPdo();
        if(DB::connection()->getDatabaseName()){
            echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
        }else{
            die("Could not find the database. Please check your configuration.");
        }
    } catch (\Exception $e) {
        die("Could not open connection to database server.  Please check your configuration.");
    }
  }
}
