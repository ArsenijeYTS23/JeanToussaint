<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\Video;

class MediaController extends Controller
{
    function index(){

      $picture= Picture::get();
      $video= Video::get();

      return response()->json([$picture,$video]);

    }
}
