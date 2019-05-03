@extends('master')
@section('title', 'Edit Beat')
@section('content')
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post" enctype="multipart/form-data">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Edit beat</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{!! $beat->title !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="slug" class="col-lg-2 control-label">Video Slug</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" value="{!! $beat->video_slug !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pdf" class="col-lg-2 control-label">PDF</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" id="pdf" name="pdf">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="img" class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" id="img" name="img">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tags" class="col-lg-2 control-label">Tags (comma seperated)</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="tags" name="tags" value="">{!! $selectedTags !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="setup" class="col-lg-2 control-label">Setups</label>

                        <div class="col-lg-10">
                            <select class="form-control" id="setup" name="setup">
                                @foreach($setups as $setup)
                                    <option value="{!! $setup->id !!}" @if($setup->id === $selSetup[0])
                                            selected="selected" @endif>
                                        {!! $setup->name !!}
                                    </option>
                                    <h1>{!! var_dump($selSetup) !!}</h1>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
@push('styles')
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
@endpush