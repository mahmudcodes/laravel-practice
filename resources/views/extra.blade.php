@extends('layouts.master')
@section('title', 'Extra')
@section('content')
<h1>Extra Page</h1>
	{{-- @component('components.alert')
		@slot('title')
			<h4>This is Slot Title</h4>
		@endslot
		@slot('details')
			<h3>This is Slot Details</h3>
		@endslot
		<h3>A simple success alert—check it out!</h3>
		<small>Status 404</small>
	@endcomponent --}}
	@component('components.alert')
		<span>Page Not Found 404</span>
	@endcomponent
@endsection

@section('extra')
	@parent
	<p>New Text For Extra</p>
@endsection