<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
   public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('phone')
        ->where('phone_name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li class="autocomplete-suggestions"><span><img style="margin-top:5px" src="/img/'.$row->image.'" alt="'.$row->phone_name.'" title="'.$row->phone_name.'" width="32px" height="38px"><a class="name" href="/phone/'.$row->id.'"><b>'.$row->phone_name.'</b></a><div class="price-indicator"><b>&#8377; '.$row->phone_price.'</b></div></span></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
