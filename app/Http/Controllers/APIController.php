<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;
use App\Report;

class APIController extends Controller
{
    public function api(){
      $users = User::all();
      return response()->json($users);
    }


    //register a report
    public function make_report(Request $request){
      $file_name = md5(microtime());
      $image = Image::make($request->file('image'))->save('reported_images/'.$file_name.$request->file('image')->getClientOriginalExtension());
      $report = new Report;
      $report->location = Input::get('location');
      $report->description = Input::get('description');
      $report->reporter_id = Input::get('id');
      $report->image = 'reported_images/'.$file_name.$request->file('image')->getClientOriginalExtension();
      $report->save();
      return response()->json("successful");
    }
}
