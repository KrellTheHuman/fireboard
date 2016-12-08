@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h3>Tasks</h3>
            <div class="panel-group" id="accordion">
                @foreach($tasks as $task)
                    @include('tasks._task')
                @endforeach
                @include('tasks._task_edit')
            </div>
        </div>
        <div class="col-md-3">
            <h3>User Capacity</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <span>all users</span>
                    <span class="pull-right">000 / {{$users->sum('hours_capacity')}}</span>
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