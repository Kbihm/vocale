@extends('app')

<div class='row'>
    @section('content')

    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class='row'>  
            <br><br>
            <!-- will be used to show any messages -->
            @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
        </div>  
        <h2>Welcome to Vocale</h2>
        <a  class="btn btn-primary" href="{{ URL::to('users/create') }}">Register Your Business</a>
    </div>
</div>


@stop
