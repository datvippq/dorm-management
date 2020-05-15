<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRoom extends Model
{
    public function student()
    {
      return StudentRoomModel::hasOne('App\Student');
    }

    public function room()
    {
      return StudentRoomModel::hasOne('App\Room');
    }
}
