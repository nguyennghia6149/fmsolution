@extends('admin_layouts.empty')
@section('body_class')
	class="empty"
@endsection
@section('main-content')
	<div class="loginBox">
		<div>
			{{--*/ $error_email = $errors->first('email') /*--}}
			<div class="box">
				<div>
					<img src="/admin/images/logo.png">
				</div>	

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="box-label">
						<label  class="control-label">E-Mail Address</label><a class="error">{{ $error_email }}</a>
						<div>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
						</div>
					</div>

					<div class="box-label ctrlPanel">
							<button type="submit" class="btn btn-primary">
								Send Password Reset Link
							</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
