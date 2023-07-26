

@extends('layouts.default')

<h1>a</h1>
<!-- <style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'list.blade.php')

@section('content')
<table>
  <tr>
    <th>id</th>

  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>{{$works->id}}</td>
    <td>{{$works->work_start}}</td>
  </tr>
  @endforeach
</table>
@endsection -->