<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class UsersController extends BaseController {

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index () {

        $users = $this->user->all();


        return View::make('users.index',['users'=>$users] );

    }

    public function show($username) {
        $user = $this->user->whereUsername($username)->first();

        return View::make('users.details', ['user'=> $user]);
    }

    public function create(){
        return View::make('users.create');
    }

    public function store() {

        // $validator = Validator::make(Input::all(), User::$rules);

        $input = Input::all();

        if(!$this->user->fill($input)->isvalid()) {

            return Redirect::back()->withInput()->withErrors($this->user->messages);
        }

        // if($validator->fails()){
        // }

        $this->user->password=Hash::make(Input::get('password'));
        $this->user->save();

        
        return Redirect::route('users.index');
    }

}