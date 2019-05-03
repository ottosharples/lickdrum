@extends('master')
@section('title', 'Admin Control Panel')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="row-content">
                            <div class="action-secondary"><i class="material-icons">account_box</i></div>
                            <h4 class="list-group-item-heading">Manage User</h4>
                            <a href="/admin/users" class="btn btn-default btn-raised">All Users</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="material-icons">supervisor_account</i>
                        </div>
                        <div class="row-content">
                            <div class="action-secondary"><i class="material-icons">accessibility</i></div>
                            <h4 class="list-group-item-heading">Manage Roles</h4>
                            <a href="/admin/roles" class="btn btn-default btn-raised">All Roles</a>
                            <a href="/admin/roles/create" class="btn btn-primary btn-raised">Create A Role</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-action-primary">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="row-content">
                            <div class="action-secondary"><i class="material-icons">border_color</i></div>
                            <h4 class="list-group-item-heading">Manage Beats</h4>
                            <a href="/admin/beats" class="btn btn-default btn-raised">All Beats</a>
                            <a href="/admin/beats/create" class="btn btn-primary btn-raised">Create A Beat</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>

            </div>

        </div>
    </div>
@endsection
@push('styles')
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
@endpush
