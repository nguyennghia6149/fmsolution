@extends('admin_layouts.main')

@section('main-content')
	@parent
	<div id="page-wrapper">
		<section class="pageForm">
			<h2 class="title">{{ $box->title }}<span class="sub-title"></span></h2>

			{{--*/ $error_title = $errors->first('title') /*--}}
			{{--*/ $error_description = $errors->first('description') /*--}}
			{{--*/ $error_image = $errors->first('image') /*--}}
			{{--*/ $error_status = $errors->first('status') /*--}}
			{{--*/ $error_type = $errors->first('type') /*--}}
			{{--*/ $type = [
						'0' => 'Service', 
						'1' => 'Industries', 
						'2' => 'About us', 
						'3' => 'Location'
			] /*--}}
			{{--*/ $status = [
						'0' => 'Unpublish', 
						'1' => 'Publish'
			] /*--}}

			{!! Form::open(array('url' => 'admin/boxes/update', 'class' => 'formPage', 'files' => true)) !!}
				<div class="row">
					{!! Form::label('title', 'Title', array('class' => 'control-label')) !!}
					<a class="error">{{ $error_title }}</a>
					{!! Form::text('title',$box->title, array('class' => 'form-control')) !!}
					{!! Form::hidden('id', $box->id) !!}
				</div>

				<div class="row">
					{!! Form::label('description', 'Description', array('class' => 'control-label')) !!}
					<a class="error">{{ $error_description }}</a>
					{!! Form::textarea('description',$box->description, array('class' => 'ckeditor')) !!}
				</div>

				<div class="row">
					{!! Form::label('image', 'Image', array('class' => 'control-label')) !!}
					<a class="error">{{ $error_image }}</a>
					{!! Form::file('image', array('class' => 'form-control')) !!}
					@if ($box->checkExistImage())
						<img class="boxImage" src="{{ $box->renImage() }}">
					@else
						<img class="boxImage" src="/uploads/default-image.gif">
					@endif
				</div>

				<div class="row">
					<label class="control-label">Status</label><a class="error">{{ $error_status }}</a>
					{!! Form::select('status', $status, $box->status, array('class' => 'select')) !!}
				</div>

				<div class="row">
					<label class="control-label">Type</label><a class="error">{{ $error_type }}</a>
					{!! Form::select('number', $type, $box->type, array('class' => 'select' )) !!}
				</div>
				
				<div class="row">
					<button type="submit" class="btn btn-primary">Save</button>
					<a href="/admin/boxes/delete/{{ $box->id }}" class="btn btn-danger"> Delete</a>
				</div>
			{!! Form::close() !!}
		</section>
	</div>
@stop