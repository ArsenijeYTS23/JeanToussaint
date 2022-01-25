<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Review;

class ReviewController extends Controller
{
    function index(){
      $review= Review::get();
      return response()->json($review);
    }
}
