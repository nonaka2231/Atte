<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\List_data;

class List_dataController extends Controller
{
      public function list_data()
  {
    var_dump('aaa');
    $works = List_data::all();
    return view('list');
    //
  }
}

