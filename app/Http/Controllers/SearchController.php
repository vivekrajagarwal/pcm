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
       <li class="autocomplete-suggestions">
       <a style="text-decoration:none" href="/phone/'.$row->id.'">
        <span>
          <img style="margin-top:5px" src="/img/'.$row->image.'" alt="'.$row->phone_name.'" title="'.$row->phone_name.'" width="32px" height="38px">
              <b class="name">'.$row->phone_name.'</b>
            <div class="price-indicator">
              <b>&#8377; '.$row->phone_price.'</b>
            </div>
        </span>
       </a>
       </li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
