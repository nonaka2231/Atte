<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
  public function index()
  {
    $user = Auth::user();
    $authors = Author::Paginate(4);
    return view('index', ['authors' => $authors]);
    $param = ['authors' => $authors, 'user' =>$user];
    return view('index', $param);
  }

public function check(Request $request)
{
  $text = ['text' => 'ログインして下さい。'];
  return view('auth', $text);
}

public function checkUser(Request $request)
{
  $email = $request->email;
  $password = $request->password;
  if (Auth::attempt(['email' => $email,
    'password' => $password])) {
    $text =   Auth::user()->name . 'さんがログインしました';
  } else {
    $text = 'ログインに失敗しました';
  }
  return view('auth', ['text' => $text]);
}
}