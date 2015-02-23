@extends('test.layouts.application')

@section ('content')

	@foreach ($bears as $bear)

		<!-- GET OUR BASIC BEAR INFORMATION -->
		<h2>{{ $bear->name }} <small>{{ $bear->type }}: Level {{ $bear->danger_level }}</small></h2>

		<!-- SHOW OFF THE TREES -->
		<h4>Trees</h4>
		@foreach ($bear->trees as $tree)
			<p>{{ $tree->type }}</p>
		@endforeach

		<!-- SHOW OFF THE PICNICS -->
		<h4>Picnics</h4>
		@foreach ($bear->picnics as $picnic)
			<p>{{ $picnic->name }}: Taste Level {{ $picnic->taste_level }}</p>
		@endforeach

	@endforeach
@stop
