@extends('layouts.default')

@section('header')
    <title>Login</title>
@stop

@section('content')

    {{ Form::open(['route'=> 'session.store']) }}
        <div>
                {{ Form::label('email', 'Email: ') }}
                {{ Form::email('email') }}

        </div>    
        
        <div>
                {{ Form::label('password', 'Password: ') }}
                {{ Form::password('password') }}
            </div>
            
        <div>{{ Form::submit('Login') }}</div>
            
    {{ Form::close() }}
@stop