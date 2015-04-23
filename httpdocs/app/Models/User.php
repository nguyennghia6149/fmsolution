<?php 
namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	protected $table = 'users';

	public static function rule()
	{
		return [
			'username' => 'required|alpha_num|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|alpha_num|between:6,20|confirmed',
			'password_confirmation ' => 'alpha_num|between:6,20'
		];
	}

	public static function changerule()
	{
		return [
			'username' => 'alpha_num',
			'email' => 'email',
			'password' => 'required|alpha_num|between:6,20|confirmed',
			'password_confirmation ' => 'alpha_num|between:6,20'
		];
	}

	protected $fillable = ['username', 'email', 'password'];

	protected $hidden = ['password', 'remember_token'];

}
