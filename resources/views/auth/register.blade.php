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
		<input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
		<input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
		<input type="password" name="password" id="name" placeholder="Password">
		<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">

		<button type="submit">Submit</button>
	</form>
@endsection

