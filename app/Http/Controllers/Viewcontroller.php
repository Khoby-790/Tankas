<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Viewcontroller extends Controller
{
   public function index()
   {
     return view('index');
   }

   public function profile()
   {
     return view('profile');
   }

   public function report()
   {
     return view('report');
   }

   public function area()
   {
     return view('area');
   }

   public function client()
   {
     return view('client');
   }
}
