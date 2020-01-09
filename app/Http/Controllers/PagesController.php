<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car;

class PagesController extends Controller
{
  public function home()
  {
    $cars = Car::all();
    return view('frontend.home', ['cars' => $cars]);
  }
}
