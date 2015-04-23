<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Validator;
use Hash;
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	protected function getFailedLoginMessage()
	{
		return 'Sorry! Something went wrong!';
	}		
	/**
	 * Show the application login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getRegister()
	{
		return redirect('auth/login');
	}

	public function getLogin()
	{
		return view('auth.login');
	}

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'username' => 'required|alpha_num', 'password' => 'required',
		]);

		if(Auth::attempt(['username' => $request->username, 'password' =>  $request->password], $request->remember))
		{
			return redirect('admin/dashboard');
		}
		return redirect($this->loginPath())
					->withInput($request->only('username', 'remember'))
					->withErrors([
						'username' => $this->getFailedLoginMessage(),
					]);
	}

	public function getLogout()
	{
		Auth::logout();
		return redirect('auth/login');
	}

	public function getChange()
	{
		if (Auth::guest())
		{
			return redirect ('auth/login');
		}
		$user = User::find(1);
		return $this->render_view ('auth.change')
				->with('user', $user);
	}

	public function postChange(Request $request)
	{
		$validate = Validator::make($request->all(), User::changerule());

		if ($validate->fails()) {
			return redirect()->back()
				->withErrors($validate->errors());
		} else {
			$user = User::find(1);
			$user->email = $request->email ;
			$user->username = $request->username ;
			$user->password = Hash::make($request->password);
			$user->save();
		}
		return redirect ('admin/dashboard')
				->with('success', 'Change information success!');
	}
}
