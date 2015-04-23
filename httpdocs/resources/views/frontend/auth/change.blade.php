@extends('admin_layouts.main')

@section('main-content')
	@parent
	<div id="page-wrapper">
		<section class="editBox">
			<h2 class="title">Change Information <span class="sub-title"></span></h2>
			
			{{--*/ $error_email = $errors->first('email') /*--}}
			{{--*/ $error_user = $errors->first('username') /*--}}
			{{--*/ $error_pass = $errors->first('password') /*--}}
			{{--*/ $error_passconfirm = $errors->first('password_confirmation') /*--}}

			<form class="form-content" role="form" method="POST" action="{{ url('/auth/change') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="box-label">
					<label class="control-label">Email</label><a class="error">{{ $error_email }}</a>
					<div>
						<input type="text" class="form-control" name="email" value="{{ $user->email }}">
					</div>
				</div>

				<div class="box-label">
					<label class="control-label">Username</label><a class="error">{{ $error_user }}</a>
					<div>
						<input type="text" class="form-control" name="username" value="{{ $user->username }}">
					</div>
				</div>

				<div class="box-label">
					<label class="control-label">Password</label><a class="error">{{ $error_pass }}</a>
					<div>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
				</div>

				<div class="box-label">
					<label class="control-label">Password Confirmtion</label><a class="error">{{ $error_passconfirm }}</a>
					<div>
						<input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmtion">
					</div>
				</div>

				<div class="box-label ctrlPanel f-left">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</section>
	</div>
@stop