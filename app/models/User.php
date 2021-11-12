<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $timestamps = false;

	protected $fillable = ['username','email', 'password'];

	public static $rules = [
		'username' => 'required',
		'email' => 'required',
		'password' => 'required'
	];

	public $messages;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public  function isValid(){
        $validator = Validator::make($this->attributes, static::$rules);

		if($validator->passes()) return true;

		$this->messages = $validator->messages();

		return false;
	}

}
