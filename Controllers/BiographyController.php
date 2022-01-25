<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biography;

class BiographyController extends Controller
{
  function index(){

    $biography= Biography::get();
  return response()->json($biography);
  }
}
