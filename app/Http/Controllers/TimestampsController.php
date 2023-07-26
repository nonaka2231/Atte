<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resources\views\dashboard;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Timestamp;
use Illuminate\Support\Facades\DB;


class TimestampsController extends Controller
{
  public function work_start()
  {
    $now = Carbon::now();
    $user_id = Auth::id();
    $date = Carbon::now()->toDateString();
    $time = Carbon::now()->toTimeString();

    DB::table('works')->insert([
      'user_id' => $user_id,
      'date' => $date,
      'start_time' => $now,
    ]);
    return redirect('/');
  }

    public function work_end()
  {
    $user_id = Auth::id();
    $date = Carbon::now()->toDateString();
    $now = Carbon::now();

    DB::table('works')->insert([
      'user_id' => $user_id,
      'date' => $date,
      'end_time' => $now,
    ]);

    return redirect('/dashboard');
  }

      public function rest_start()
  {
    $user_id = Auth::id();
    $date = Carbon::now()->toDateString();
    $time = Carbon::now()->toTimeString();
    $work_data =  DB::table('works')->where(['user_id'=> $user_id, 'date'=> $date])->first();
    $work_id = $work_data->work_id;


    DB::table('rests')->insert([
      'work_id' => $work_id,
      'start_time' => $time
    ]);

    return redirect('/dashboard');
  }

    public function rest_end()
  {
    $user_id = Auth::id();
    $date = Carbon::now()->toDateString();
    $time = Carbon::now()->toTimeString();
    $work_data =  DB::table('works')->where(['user_id'=> $user_id, 'date'=> $date])->first();
    $work_id = $work_data->work_id;

    DB::table('rests')->insert([
      'work_id' => $work_id,
      'end_time' => $time
    ]);

    return redirect('/dashboard');
  }
}
