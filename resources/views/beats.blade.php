@extends('master')
@section('title', 'Lickdrum - Beats/Licks/Fills')
@section('content')
<h1 id="beats">Beats</h1>
        <ul>
            @if(empty($beats))
                <p style="color: #31393C;">No beats found</p>
            @else
                @foreach($beats as $beat)
                    <li><a href="{{ action('BeatsController@show', $beat->slug) }}"> {!! $beat->title !!}</a></li>
                @endforeach
            @endif
        </ul>
        <h1 id="licks">Licks</h1>
        <ul>
            @if(empty($licks))
                <p style="color: #31393C;">No licks found</p>
            @else
                @foreach($licks as $lick)
                    <li><a href="{{ action('BeatsController@show', $lick->slug) }}"> {!! $lick->title !!}</a></li>
                @endforeach
            @endif
        </ul>
@endsection
