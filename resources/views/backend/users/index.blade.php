@extends('master')
@section('title', 'All Users')
@section('content')
    <h1>Users</h1>
	@if(session('status'))
		<p style="color: green">{{ session('status') }}</p>
	@endif
	@if($users->isEmpty())
		<p>There is no user</p>
	@endif
	<table>
		 <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joined at</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{!! $user->id !!}</td>
                    <td>
                        <a href="{!! action('Admin\UsersController@edit', $user->id) !!}">{!! $user->name !!} </a>
                    </td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->created_at !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection