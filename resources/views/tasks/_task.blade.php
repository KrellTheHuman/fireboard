<div class="panel panel-default panel-task">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse-{{$task->id}}">
        <div class="panel-title">
            <span><i class="badge">{{$task->short_date()}}</i> {{$task->name}}</span>
        </div>
        {{--<span class="text-right">{{$task->get_subtask_count_completed()}} / {{$task->get_subtask_count()}}</span>--}}
        <span class="text-right">{{$task->get_hours_completed()}} / {{$task->get_hours_total()}}</span>
    </div>
    <div id="collapse-{{$task->id}}" class="panel-collapse collapse">
        <div class="panel-body">
            <ul class="list-unstyled">
                @foreach($task->subtasks as $subtask)
                    <li class="subtask">
                        <div class="subtask-status-title">
                            <input type="checkbox" class="checkbox-subtask" id="checkbox-subtask-{{$subtask->id}}" title="mark subtask complete">
                            <span>{{$subtask->name}}</span>
                        </div>
                        <span>{{$subtask->hours_estimate}}</span>
                    </li>
                @endforeach
                <li><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#subtask-edit-modal">add new subtask</button></li>
            </ul>
        </div>
        <div class="panel-footer">
            <button class="text-center toggle btn btn-xs">
                <a href="#collapse-info-{{$task->id}}" class="toggle-more-less" data-toggle="collapse">MORE</a>
            </button>
            <div class="collapse" id="collapse-info-{{$task->id}}">
                @if($task->description !== "")
                    <div class="row">
                        <div class="col-xs-12">
                            <h5>Description</h5>
                        </div>
                        <div class="col-xs-12">
                            <p>{{$task->description}}</p>
                        </div>
                    </div>
                @endif
                @if($task->contact_name !== "" || $task->contact_email !== "" || $task->contact_phone !== "")
                    <div class="row">
                        <div class="col-xs-12">
                            <h5>Contact</h5>
                        </div>
                        @if($task->contact_name !== "")
                            <div class="col-md-4">
                                <p>{{$task->contact_name}}</p>
                            </div>
                        @endif
                        @if($task->contact_email !== "")
                            <div class="col-md-4 text-center-mobile">
                                <p>
                                    <a href="mailto:{{$task->contact_email}}" target="_blank">{{$task->contact_email}}</a>
                                </p>
                            </div>
                        @endif
                        @if($task->contact_phone !== "")
                            <div class="col-md-4 text-right-mobile">
                                <p>{{$task->contact_phone}}</p>
                            </div>
                        @endif
                    </div>
                @endif
                @if($task->dev_url !== "" || $task->live_url !== "")
                    <div class="row">
                        @if($task->dev_url !== "")
                            <div class="col-md-6">
                                <h5>Dev URL</h5>
                                <p><a href="{{$task->dev_url}}" target="_blank">{{$task->dev_url}}</a></p>
                            </div>
                        @endif
                        @if($task->live_url !== "")
                            <div class="col-md-6">
                                <h5>Live URL</h5>
                                <p><a href="{{$task->live_url}}" target="_blank">{{$task->live_url}}</a></p>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>