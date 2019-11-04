<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getWelcomePage()
    {
      return view('welcome');
    }
}
