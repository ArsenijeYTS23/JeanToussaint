<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discography;
use App\Records;
use App\Album;
use App\Song;

class DiscographyController extends Controller
{
    function index(){

      $album= Album::with('songs')->orderBy('number', 'asc')->get();
      $discography= Discography::with('records')->get();
        return response()->json([$discography,$album]);
    }
}
