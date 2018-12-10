<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PhoneController extends Controller
{
    public function fetch(Request $request){
        
     if(!empty($request->id))
     {
      $query = $request->id;
      $data = DB::table('phone')->where('id', '=', $query)->get();
      return view('phone.index')->with('data',json_decode($data,true));
     }
    }
}
