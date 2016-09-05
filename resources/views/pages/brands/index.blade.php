@extends('layouts.app')

@section('content')
	<h2>Brands</h2>
	<ul>
		@foreach( $brands as $brand )
			<li>
				<a href="{{ route('brands.show', $brand->slug) }}">{{ $brand->name }}</a>
			</li>
		@endforeach
	</ul>
@endsection