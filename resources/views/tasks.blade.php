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
                                    <span class="badge">{{$task->priority}}</span> {{$task->name}}</a>
                            </h4>
                            <span>percent complete</span>
                        </div>
                        <div id="collapse-{{$task->id}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul>
                                    @foreach($task->subtasks as $subtask)
                                        <li>{{$subtask->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-md-3">
            <div class="col-xs-12">
                <h3>User Capacity</h3>
                <ul>
                    <li>all users - XX%</li>
                    <li>user1 - XX%</li>
                    <li>user2 - XX%</li>
                    <li>user3 - XX%</li>
                    <li>user4 - XX%</li>
                </ul>
            </div>
        </div>
    </div>
@stop