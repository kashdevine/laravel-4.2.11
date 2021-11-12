@extends('layouts.default')

@section('header')
    <title>About {{ $user->username }}</title>
@stop


@section('content')

    <a href="/users">
        <button style="margin-bottom:2rem;">Back to users</button>
    </a>

    <p>This is a page for and about {{ $user }}</p>

    <p>Their username is {{ $user->username }}</p>
@stop
