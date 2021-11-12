@extends('layouts.default')


@section('header')
    <title>All Users</title>
@stop


@section('content')
    <h1>All Users </h1>

    <a href="/users/create">
        <button style="margin-bottom:2rem;">Create a user</button>
    </a>

    @if($users->count() == 0) 
    <p>There are no users here</p>

    @else
        @foreach($users as $user)
                <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
        @endforeach

    @endif
@stop
