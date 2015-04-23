@extends('admin_layouts.main')

@section('main-content')
	@parent
	<div id="page-wrapper">
		<section class="editBox">
			<h2 class="title">Box info <span class="sub-title"></span></h2>
			
			@foreach ( $boxes as $item )
				<table style="width:600px">
					<tr class="col-md-1">
						<td>{{ $item->id }}</td>
					</tr>
					<tr class="col-md-6">
						<td>{{ $item->title }}</td>
					</tr>
					<tr class="col-md-4">
						<td>{{ $item->image }}</td>
					</tr>
					<tr class="col-md-1">
						<td><a href="boxes/edit/{{ $item->id }}">edit</a></td>
					</tr>
				</table>
			@endforeach
		</section>
	</div>
@stop