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
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion"
                             data-target="#collapse-{{$task->id}}">
                            <div class="panel-title">
                                <span><i class="badge" data-toggle="tooltip" title=""></i> {{$task->name}}</span>
                            </div>
                            <span class="text-right">{{$task->subtask_count_completed()}} / {{$task->subtask_count()}}
                            </span>
                        </div>
                        <div id="collapse-{{$task->id}}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ol>
                                    @foreach($task->subtasks as $subtask)
                                        <li>{{$subtask->name}}</li>
                                    @endforeach
                                    <li>Add New Subtask (put this in modal)
                                        <form action="#">
                                            <div class="form-group row">
                                                <div class="col-xs-12 col-md-10">
                                                    <input name="add-subtask-name" type="text" class="form-control" placeholder="subtask heading">
                                                </div>
                                                <div class="col-xs-12 col-md-2">
                                                    <input name="add-subtask-due_date" type="text" class="form-control text-center add-subtask-date-picker" title="Subtask Due Date">
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ol>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                @endforeach
                <div class="panel panel-default">
                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion"
                         data-target="#collapse-add-task">
                        <h4 class="panel-title">
                            <span><i class="glyphicon glyphicon-plus" data-toggle="tooltip" title="Add New Task"></i> Add New Task</span>
                        </h4>
                    </div>
                    <div id="collapse-add-task" class="panel-collapse collapse">
                        <div class="panel-body">
                            <form action="#">
                                <div class="form-group row">
                                    <div class="col-xs-12 col-md-10">
                                        <input name="add-task-name" type="text" class="form-control" placeholder="task heading">
                                    </div>
                                    <div class="col-xs-12 col-md-2">
                                        <input name="add-task-due_date" type="text" class="form-control text-center" id="add-task-date-picker" title="Task Due Date">
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
                    <span class="pull-right">000 / {{$users->sum('hours_capacity')}}
                </li>
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