@extends('master')
@section('title', $beat->title)
@section('content')
        <h1>{{ $beat->title }}</h1><a href="{{ $pdf }}"><i class="fa fa-file-pdf-o"></i></a>
        <img src="{{ $image }}" id="sheets"/>
        <div id="sample"><iframe width='500' height='294' src="https://www.youtube.com/embed/{!! $beat->video_slug !!}?&theme=light&autohide=2&showinfo=0"frameborder="0"></iframe></div>
        <div id="tags">
            <ul>
                <h3>Tags:</h3>
                @foreach($tags as $tag)
                    <a href="{{ action('TagsController@serve', $tag->name) }}"><li>{{ $tag->name }}</li></a>
                @endforeach
            </ul> 
        </div>
        {!! $setup[0]->html !!}
@endsection
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/beat.css') }}">
@endpush