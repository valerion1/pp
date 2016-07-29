@extends('workspace.layers.extender')

@section('title', 'Profile')

@section('content')
<section class="content-header">
    <h1>
        Profile
    </h1>
    <!-- TODO сделать лист для заметок -->
</section>

<!-- Main content -->
<section class="content">
    <div class="col-md-3">

        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{ $user->image }}" alt="User profile picture">

                <h3 class="profile-username text-center"><span class="editable">{{ $user->name }}</span></h3>

                {{-- TODO about <p class="text-muted text-center"></p>--}}

                <ul class="list-group list-group-unbordered">
                    <li class="list-item active">
                        <a aria-expanded="true" href="#projects" data-toggle="tab"><b>Projects</b></a> <a class="pull-right">{{ count($user->projects) }}</a>
                    </li>

                    <li class="list-item">
                        <a aria-expanded="true" href="#tasks" data-toggle="tab"><b>Tasks</b></a> <a class="pull-right">{{ count($user->tasks) }}</a>
                    </li>
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
                                    <th>Date</th>
                                    <th>Progress</th>
                                </tr>

                                @foreach($user->tasks as $key => $task)

                                    <tr>
                                        <td>{{ $key + 1 }}.</td>
                                        <td>{{ $task->name }}</td>
                                        <td>{{ $task->created_at }}</td>
                                        <td>
                                            <div class="progress progress-md">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%">55%</div>
                                            </div>
                                        </td>
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

</section>


@endsection