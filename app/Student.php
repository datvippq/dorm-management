<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function getAllStudent()
    {
      return StudentModel::all();
    }

    public function getById($id)
    {
      return StudentModel::where('id',$id)->get();
    }

}
