@extends('master')
@section('title', 'Create a Role')
@section('content')
	<h1>Create a Role<h1>
	@if(session('status'))
		<p style="color: green">{{ session('status') }}</p>
	@endif
	<ul>
		@foreach($errors->all() as $error)
			<li style="color: red">{{ $error }}</li>
		@endforeach
	</ul>
	<form method='post'>
		{{ csrf_field() }}
		<input type="text" name="name" id="name" placeholder="Name">
		<button type="submit">Submit</button>
	</form>
@endsection