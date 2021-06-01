<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
  public function index()
  {
      return view('email');
  }
  public function send(Request $request)
  {
      $data = [
          'name'=>$request->name,
          'image'=>$request->file('image')
      ];
      $to = 'kavinbala88838@gmail.com';
      \Mail::to($to)->send(new \App\mail\TesMail($data));

      echo 'sent email address';
  }
}
