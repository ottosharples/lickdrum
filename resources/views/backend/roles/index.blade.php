@extends('master')
@section('title', 'Roles')
@section('content')
    @if (session('status'))
        <p style="color: green">
            {{ session('status') }}
        </p>
    @endif
    @if ($roles->isEmpty())
        <p> There is no role.</p>
    @else
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{!! $role->name !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection