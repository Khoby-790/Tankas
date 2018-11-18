<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class APIController extends Controller
{
    public function api(){
      $users = User::all();
      return response()->json($users);
    }
}
