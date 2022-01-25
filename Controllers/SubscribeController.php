<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use\App\Subscribe;

class SubscribeController extends Controller
{
    function store(Request $request){
      $subscribe =new Subscribe;

      $validator = Validator::make($request->all(), [
           'email' => 'required|email'
          // 'body' => 'required',
       ]);

       if ($validator->fails()) {
          return response()->json(['message'=>'not valid email']);
       }else{

     $subscribe->email = $request->input('email');
     $subscribe->name = '';
     $subscribe->subject = '';
     $subscribe->text = '';

    $subscribe->save();
    return response()->json(['message'=>'email sent']);

  }

    //  return back();
    }
    function message(Request $request){
      $subscribe =new Subscribe;

      $validator = Validator::make($request->all(), [
           'email' => 'required|email',
           'text' => 'required'
          // 'body' => 'required',
       ]);

       if ($validator->fails()) {
          return response()->json(['poruka'=>'not valid']);
       }else{

     $subscribe->email = $request->input('email');
     $subscribe->name = $request->input('name');
     $subscribe->subject = $request->input('subject');
     $subscribe->text = $request->input('text');

    $subscribe->save();
    return response()->json(['poruka'=>'message has benn sent']);

  }

    //  return back();
    }
}
