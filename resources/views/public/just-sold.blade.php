@extends('layouts.app')

@section('pageTitle', 'Franchise History')

@section('subpage__header')
	<div class="Subpage">
		<div class="container Flex Flex--column Flex--center">			
			<h1 class="Subpage__title">Franchise History</h1>
			<h2 class="Subpage__subtitle">
				
			</h2>
		</div>
	</div>
@endsection

@section('content')
	<div class="Row">
		<div class="Column-12">
			{!! file_get_contents(public_path() . '/images/map.svg') !!}
		</div>
	</div>
@endsection