@extends('admin_layouts.master')

@section('title', 'FM Admin')

@section('meta')
	@include('admin_elements.meta')
@stop

@section('head')
	@include('admin_elements.head')
@stop

@section('header')
	@include('admin_elements.header')
@stop

@section('main-content')
	@include('admin_layouts.sidebar')
@stop

@section('footer')
    @include('admin_elements.footer')
@stop

@section('script')
    @include('admin_elements.script')
@stop