
@extends('app')

@section('content')

<div class='row'>
    <div class="col-md-3">
    </div>
    <!-- if there are creation errors, they will show here -->
    <div class="col-md-6">
        <div class="alert alert-warning"> 
            {!! HTML::ul($errors->all()) !!}
        </div>
        <h1>Register Your Business</h1>

        {!! Form::open(array('url' => 'users','class'=>'form-horizontal')) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', Input::old('name'), array('class' => 'form-control','required'=>true)) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Phone number') !!}
            {!! Form::text('phone', Input::old('phone'), array('class' => 'form-control','required'=>true)) !!}
        </div>
        <div class="form-group">
            {!! Form::label('business_phone', 'Business phone number') !!}
            {!! Form::text('business_phone', Input::old('phone'), array('class' => 'form-control','required'=>true)) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', Input::old('email'), array('class' => 'form-control','required'=>true)) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirm Password') !!}
            {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
        </div>

        {!! Form::submit('Register', array('class' => 'btn btn-large btn-primary')) !!}

        {!! Form::close() !!}
    </div>
</div>  

@endsection