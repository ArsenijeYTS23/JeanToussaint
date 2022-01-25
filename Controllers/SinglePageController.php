<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Article as ArticleResource;

class SinglePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('welcome');
    }






}
