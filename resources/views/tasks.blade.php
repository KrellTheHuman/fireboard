@extends('layouts/layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1>Tasks</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-2">
            <ul>
                <li>dummy task</li>
                <li>dummy task</li>
                <li>dummy task</li>
                <li>dummy task</li>
                <li>dummy task</li>
                <li>dummy task</li>
            </ul>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="col-xs-12">@include('_users')</div>
        </div>
    </div>
@stop