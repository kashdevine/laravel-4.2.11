<?php

use Illuminate\Support\Facades\Redirect;

class SessionController extends BaseController {

    public function create(){

        if(Auth::check()) return Redirect::to('/admin');

        return View::make('session.create');


    }

    public function store(){

        $input = Input::all();
        
        if (Auth::attempt(Input::only('email','password'))) {
            return 'Welcome ' . Auth::user()->username;
        }

        return Redirect::back()->withInput();
    }

    public function destroy(){
        Auth::logout();

        return Redirect::route('session.create');
    }

}