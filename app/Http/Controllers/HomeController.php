<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home() {
    return view('home');
  }
  public function aboutus() {
    return view('aboutus');
  }
  public function services() {
    return view('services');
  }
  public function projects() {
    return view('projects');
  }
}
