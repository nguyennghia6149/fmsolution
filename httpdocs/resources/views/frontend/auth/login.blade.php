@extends('admin_layouts.empty')
@section('body_class')
	class="empty"
@endsection
@section('main-content')
	<div class="loginBox">
		<div>

			{{--*/ $error_pass = $errors->first('password') /*--}}
			{{--*/ $error_user = $errors->first('username') /*--}}
			
			
			<div class="box">
				<div>
					<img src="/admin/images/logo.png">
				</div>

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="box-label">
						<label class="control-label">Username</label><a class="error">{{ $error_user }}</a>
						<div>
							<input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
						</div>
					</div>

					<div class="box-label">
						<label class="control-label">Password</label><a class="error">{{ $error_pass }}</a>
						<div>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
					</div>

					<div class="box-label">
						<div class="remember">
							<div class="checkbox f-left">
								<label>
									<input type="checkbox" name="remember"> Remember Me
								</label>
							</div>
							<a id="forgot" class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
						</div>
					</div>

					<div class="box-label ctrlPanel">
						<button type="submit" class="btn btn-primary f-right">Login</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
@endsection
