@extends('layouts.app')

@section('content')
	<h2 class="Page__title">Brands</h2>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Brand name</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $brands as $brand )
				<tr>
					<td>
						<a href="{{ route('dashboard.brands.show', $brand->slug) }}">
							{{ $brand->name }}
						</a>
					</td>
					<td>
						<button class="btn btn-danger">&times;</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection