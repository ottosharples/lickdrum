@extends('master')
@section('title', 'sign up')
@section('content')

	<ul>
		@foreach($errors->all() as $error)
			<li style="color: red">{{ $error }}</li>
		@endforeach
	</ul>

	

	<form method="post">
		{{ csrf_field() }}
		<input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
		<input type="password" name="password" id="name" placeholder="Password">

		<button type="submit">Submit</button>
	</form>
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endpush
