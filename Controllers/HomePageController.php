<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;

class HomePageController extends Controller
{
    function index(){

      $home_page= HomePage::get();
    return response()->json($home_page);
    }
}
