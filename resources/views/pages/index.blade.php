@extends('app')
@section('content')
           ok content ipage working
           <ul>
           @foreach($f as $fname)
           
           <li>{{$fname}}</li>
           @endforeach
           </ul>
           
@stop
