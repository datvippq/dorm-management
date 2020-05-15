<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
class RoomController extends Controller
{
    public $room;

    public function __construct()
    {
      $this->room = new Room();
    }

    public function getRoomList()
    {
      $room = $this->room->getAllRoom();
      foreach ($room as $r) {
        echo $r->id .' - '.$r->type.'<br>';
      }
    }
}
