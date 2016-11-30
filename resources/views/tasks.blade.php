@extends('layouts/layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-9">
            <h3>Tasks</h3>
            <div class="panel-group" id="accordion">
                @foreach($tasks as $task)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$task->id}}">
                                    {{--                                    <span><i class="badge">{{date('Y-m-d H:i:s')}}</i> {{$task->name}}</span>--}}
                                    <span><i class="badge" data-toggle="tooltip"
                                             title="Due {{$task->due_date}}">{{floor($task->due_date - date('Y-m-d H:i:s')) / 60 * 60 * 24}}</i> {{$task->name}}</span>
                                </a>
                            </h4>
                            <span class="text-right">percent complete</span>
                        </div>
                        <div id="collapse-{{$task->id}}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ol>
                                    @foreach($task->subtasks as $subtask)
                                        <li>{{$subtask->name}}</li>
                                    @endforeach
                                </ol>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                @endforeach
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-add-task">
                                <span><i class="glyphicon glyphicon-plus" data-toggle="tooltip"
                                         title="Add New Task"></i> Add New Task</span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-add-task" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form action="#">
                                <div class="form-group row">
                                    <div class="col-xs-12 col-md-9">
                                        <input name="add-task-name" type="text" class="form-control" placeholder="task heading">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <input name="add-task-due_date" type="text" class="form-control" data-provide="datepicker" id="add-task-date-picker" title="Task Due Date">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <h3>User Capacity</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <span>all users</span>
                    <span class="pull-right">000 / {{$users->sum('hours_capacity')}}</li>
                @foreach($users as $user)
                    <li class="list-group-item">
                        <span>{{$user->name}}</span>
                        <span class="pull-right">00 / {{$user->hours_capacity}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@stop