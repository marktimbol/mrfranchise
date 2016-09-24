@extends('layouts.app')

@section('pageTitle', 'Franchise History')

@section('header_styles')
	<link rel="stylesheet" href="/css/map.css" />
@endsection

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
	<div id="world-map-markers" style="width: 600px; height: 400px"></div>
@endsection

@section('footer_scripts')
	<script src="/js/map.js"></script>
@endsection