@extends('master')
@section('title', $tag->name)
@section('content')
<h1 style="color: #31393C">Beats/Licks with tag: {{ $tag->name }}</h1>
<h2 id="beats">Beats</h2>
        <ul>
            @if(empty($beats))
                <p style="color: #31393C;">No beats found</p>
            @else
                @foreach($beats as $beat)
                    <li><a href="{{ action('BeatsController@show', $beat->slug) }}"> {!! $beat->title !!}</a></li>
                @endforeach
            @endif
        </ul>
        <h2 id="licks">Licks</h2>
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
