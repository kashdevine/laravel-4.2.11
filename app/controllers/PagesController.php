<?php

use Illuminate\Support\Facades\Hash;

class PagesController extends BaseController {

    public function home () {
        // Elequent's way of DB query get
        // $users = User::where('username', '!=', 'KashTest')->get();
        // return $users;


        // Elequent's insert by object
        // $user = new User;
        // $user->username = 'CodeAdded';
        // $user->password = Hash::make('password');
        // $user->save();

        // Elequent insert by array
        // User::create([
        //     'username'=> 'AnotherCodeAdded',
        //     'password' => Hash::make('987654321')
        // ]);

        //Elequent update user
        // $user = User::find(2);
        // $user->username = 'UpdatedName';
        // $user->save();


        //Elequent DeleteUser
        // $user = User::find(4);
        // $user->delete();



        // Elequent Get all
        // return User::all();
        
        //Elequent Order
        // return User::orderBy('username', 'asc')->get();


        //Elegent order and take first two
        // return User::orderBy('username', 'asc')->take(2)->get();

	
        $name = 'Kash';
        return View::make('hello')->with('name', $name);
    }


    public function about(){
        return View::make('about');
    }


}