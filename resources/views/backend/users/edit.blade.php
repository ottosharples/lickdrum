@extends('master')
@section('title', 'Edit User')
@section('content')
	<h1>Edit a User</h1>
	@if(session('status'))
		<p style="color: green">{{ session('status') }}</p>
	@endif
	<ul>
		@foreach($errors->all() as $error)
			<li style="color: red">{{ $error }}</li>
		@endforeach
	</ul>
	<form method="post">
		{!! csrf_field() !!}
		<input type="text" name="name" id="name" placeholder="Name" value="{{ $user->name }}">
		<input type="text" name="email" id="email" placeholder="Email" value="{{ $user->email }}">
		<select id="role" name="role[]" multiple>
            @foreach($roles as $role)
                <option value="{!! $role->name !!}"  @if(in_array($role->name, $selectedRoles))
                selected="selected" @endif >{!! $role->name !!}
                </option>
            @endforeach
        </select>
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">

        <button type="submit">Submit</button>
	</form>
@endsection