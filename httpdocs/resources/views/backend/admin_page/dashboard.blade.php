@extends('admin_layouts.main')

@section('main-content')
	@parent
	<div id="page-wrapper">
		@if(Session::has('success'))
			<div class="alert alert-success"><i class="fa fa-bullhorn"></i> {{ Session::get('success') }}</div>
		@endif
	</div>
@stop
