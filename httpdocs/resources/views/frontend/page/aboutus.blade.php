@extends('layouts.main')

{{-- Remove slider --}}
@section('slider')
@overwrite

@section('main-content')
    <section id="content" class="container clearfix">
		@include('layouts.partial.sidebar')
		<section id="main" class="three-fourths column-last">
			<h1>About Us</h1>
        </section>
    </section>
    
@stop