@extends('workspace.layers.extender')

@section('title', 'Profile')

@push('scripts')

<script src="{{ asset("js/profile.js") }}"></script>

@endpush

@push('stylesheets')

<link rel="stylesheet" href="{{ asset("css/profile.css") }}">

@endpush

@section('content')
<section class="content-header">
    <h1>
        Profile
    </h1>
    <!-- TODO сделать лист для заметок -->
</section>

<input type="hidden" name="_token" content="{{ csrf_token() }}">
{{--<input type="hidden" name="_user_id" content="{{ $user->id }}">--}}

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3">

            <div class="box box-primary">
                <div class="box-body box-profile">

                    <div class="profile-img-block">
                        <img class="profile-user-img img-responsive img-circle" src="{{ $user->image }}" alt="User profile picture">
                        <i class="fa fa-search"></i>
                    </div>

                    <h3 class="profile-username text-center">
                        <span id="name" data-type="text" class="editable-click editable-username" data-pk="{{ $user->id }}">{{ $user->name }}</span>
                    </h3>

                    {{-- TODO about <p class="text-muted text-center"></p>--}}
<!--                        email-->
                    <div class="text-center">
                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                    </div>
                    
<!--                        skype-->
                    
                    @if(isset($user->skype))
                        <div class="text-center">
                            <a class="text-center" href="skype:{{ $user->skype }}"><i class="fa fa-skype"></i>{{ $user->skype }}</a>
                        </div>
                    @else
                        <div class="text-center">
                            <span class="editable-click">Enter skype</span>
                        </div>
                    @endif
                    
<!--                    city-->
                    
                                        @if(isset($user->city))
                        <div class="text-center">
                            <a class="text-center" href="city:{{ $user->city }}"><i class="fa fa-home"></i>{{ $user->city }}</a>
                        </div>
                    @else
                        <div class="text-center">
                            <span class="editable-click">Enter your city</span>
                        </div>
                    @endif
                    
<!--                   gender-->

                    
                    

                    {{--<ul class="list-group list-group-unbordered">--}}
                        {{--<li class="list-item active">--}}
                            {{--<a aria-expanded="true" href="#projects" data-toggle="tab"><b>Projects</b></a> <a class="pull-right">{{ count($user->projects) }}</a>--}}
                        {{--</li>--}}

                        {{--<li class="list-item">--}}
                            {{--<a aria-expanded="true" href="#tasks" data-toggle="tab"><b>Tasks</b></a> <a class="pull-right">{{ count($user->tasks) }}</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                </div>
                <!-- /.box-body -->
            </div>

            <div class="box box-solid">
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">Folders</h3>--}}

                    {{--<div class="box-tools">--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a aria-expanded="true" href="#projects" data-toggle="tab">
                                <i class="fa fa-puzzle-piece"></i><b>Projects</b>
                                <span class="label label-primary pull-right">{{ count($user->projects) }}</span>
                            </a>
                        </li>
                        <li class="">
                            <a aria-expanded="true" href="#tasks" data-toggle="tab">
                                <i class="fa fa-question-circle"></i><b>Tasks</b>
                                <span class="label label-primary pull-right">{{ count($user->tasks) }}</span>
                            </a>
                        </li>
                        {{--<li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>--}}
                        {{--</li>--}}
                        {{--<li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>--}}
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>

        </div>

        <div class="col-md-9">

            <div class="box">

                <div class="nav-tabs-custom">
                    <div class="tab-content">

                        @if(count($user->projects) > 0)
                        <div class="tab-pane active" id="projects">
                            <div class="box-header with-border">
                                <h3 class="box-title">Projects</h3>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <th style="width: 10px">#</th>
                                        <th>Projects</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Command</th>
                                    </tr>


                                    @foreach($user->projects as $key => $project)

                                        <tr>
                                            <td>{{ $key + 1 }}.</td>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ $project->created_at }}</td>
                                            {{-- TODO состояние проекта <td><span class="label label-primary">{{ $project->state }}</span></td>--}}
                                            <td><span class="label label-primary">in dev</span></td>
                                            <td>
                                                {{ count($project->users) . " members" }}
                                            </td>
                                        </tr>

                                    @endforeach

                                    </tbody></table>
                            </div>
                        </div>
                        @endif

                        @if(count($user->tasks) > 0)
                        <div class="tab-pane" id="tasks">
                            <div class="box-header with-border">
                                <h3 class="box-title">Tasks</h3>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <th style="width: 10px">#</th>
                                        <th>Task</th>
                                        <th class="text-center">From</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Date</th>

                                        {{--<th>Progress</th>--}}
                                    </tr>

                                    @foreach($user->tasks()->orderBy('created_at')->get() as $key => $task)

                                        <tr>
                                            <td>{{ $key + 1 }}.</td>

                                            @if($task->status == 0)
                                                <td><a href="#" style="color: #c5c5c5;text-decoration: line-through;" class="show-modal" modal-act="show-task" modal-id="{{ $task->id }}">{{ $task->name }}</a></td>
                                            @else
                                                <td><a href="#" class="show-modal" modal-act="show-task" modal-id="{{ $task->id }}">{{ $task->name }}</a></td>
                                            @endif

                                            <td class="text-center"><a href="#">{{ $task->user_from->name }}</a></td>
                                            {{--<td><a href="#">{{ $task::status[$task->status][0] }}</a></td>--}}
                                            {{--<td><span class="label" style='background-color:{{ $task::status[$task->status]["color"] }};'>{{ $task::status[$task->status]["name"] }}</span></td>--}}
                                            {{--@if($task->status == 0)--}}
                                                {{--<td><span class="label" style="background-color:#c5c5c5;font-weight:bold;"> closed</span></td>--}}
                                            {{--@else--}}
                                                {{--<td><span class="label" style="background-color:#3c8dbc;font-weight:bold;"> open</span></td>--}}
                                            {{--@endif--}}

                                            @if($task->status == 0)
                                                <td class="text-center"><span class="label" style="color:#c5c5c5;font-weight:bold;font-size: 15px;"> closed</span></td>
                                            @else
                                                <td class="text-center"><span class="label" style="color:#3c8dbc;font-weight:bold;font-size: 15px;"> open</span></td>
                                            @endif

                                            <td class="text-center">{{ $task->created_at }}</td>

                                            {{--<td>--}}
                                                {{--<div class="progress progress-md">--}}
                                                    {{--<div class="progress-bar progress-bar-danger" style="width: 55%">55%</div>--}}
                                                {{--</div>--}}
                                            {{--</td>--}}
                                        </tr>

                                    @endforeach

                                    </tbody></table>
                            </div>
                        </div>
                        @endif

                    </div>
                </div>

            </div>

        </div>

    </div>

</section>



@endsection