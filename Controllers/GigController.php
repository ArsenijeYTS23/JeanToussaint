<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use\App\Gig;

class GigController extends Controller
{
    function index(){
       Carbon::now();
      $gigs= Gig::get();
      $past= $gigs->where('date','<',Carbon::now())->sortByDesc('date')->values();
      $upcoming= $gigs->where('date','>',Carbon::now())->sortBy('date')->values();

      foreach ($past as $pa) {
         $as= Carbon::parse($pa->date);
         $pa->days= $as->diffInDays(Carbon::now());

      }
  //    return $past->values();




      return response()->json([$past,$upcoming]);
    }
}
