@extends('master')
@section('title', 'All beats')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> All beats </h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($beats->isEmpty())
                <p> There is no beat.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Updated At</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($beats as $beat)
                        <tr>
                            <td>{!! $beat->id !!}</td>
                            <td>
                                <a href="{{ action('Admin\BeatsController@edit', $beat->id) }}">{!! $beat->title !!} </a>
                            </td>
                            <td>{!! $beat->slug !!}</td>
                            <td>{!! $beat->created_at !!}</td>
                            <td>{!! $beat->updated_at !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
@push('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
@endpush