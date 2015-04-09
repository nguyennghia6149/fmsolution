@extends('layouts.master')

@section('title', 'Layout')

@section('meta')
	@include('layouts.elements.meta')
@stop

@section('head')
	@include('layouts.elements.head')
@stop

@section('header')
	@include('layouts.elements.header')
@stop

@section('main-content')
    <p>This is my body content.</p>
@stop

@section('slider')
    @include('layouts.partial.slider')
@stop

@section('breakcumb')
    @include('layouts.partial.breakcumb')
@stop

@section('footer')
    @include('layouts.elements.footer')
@stop

@section('script')
    @include('layouts.elements.script')
@stop