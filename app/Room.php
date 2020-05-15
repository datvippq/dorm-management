<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function getAllRoom()
    {
      return RoomModel::all();
    }

    public function getById($id)
    {
      return RoomModel::where('id', $id)->get();
    }

    public function student()
    {
      return RoomModel::hasMany('App\StudentRoom');
    }
}
