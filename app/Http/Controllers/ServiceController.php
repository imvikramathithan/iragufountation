<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function serviceformanagement(){
    return view( 'serviceformanagement');
  }

  public function serviceforstudent(){
    return view('serviceforstudent');
  }
    public function handwritingPage(){
    return view('handwritingPage');
  }
      public function wingsPage(){
    return view('wings-page');
  }
}
