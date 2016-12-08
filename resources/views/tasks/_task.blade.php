<div class="panel panel-default panel-task">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion"
         data-target="#collapse-{{$task->id}}">
        <div class="panel-title">
            <span><i class="badge">{{$task->short_date()}}</i> {{$task->name}}</span>
        </div>
        <span class="text-right">{{$task->subtask_count_completed()}} / {{$task->subtask_count()}}</span>
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
                            <div class="col-md-10">
                                <input name="add-subtask-name" type="text" class="form-control" placeholder="subtask heading">
                            </div>
                            <div class="col-md-2">
                                <input name="add-subtask-due_date" type="text" class="form-control text-center add-subtask-date-picker" title="Subtask Due Date">
                            </div>
                        </div>
                    </form>
                </li>
            </ol>
        </div>
        <div class="panel-footer">
            <p class="text-center toggle">
                <a href="#collapse-info-{{$task->id}}" class="toggle-more-less" data-toggle="collapse">more</a></p>
            <div class="collapse" id="collapse-info-{{$task->id}}">
                @if($task->description !== "")
                <div class="row">
                    <div class="col-xs-12">
                        <h4>Description</h4>
                    </div>
                    <div class="col-xs-12">
                        <p>{{$task->description}}</p>
                    </div>
                </div>
                @endif
                @if($task->contact_name !== "" || $task->contact_email !== "" || $task->contact_phone !== "")
                <div class="row">
                    <div class="col-xs-12">
                        <h4>Contact</h4>
                    </div>
                    @if($task->contact_name !== "")
                    <div class="col-md-4">
                        <p>{{$task->contact_name}}</p>
                    </div>
                    @endif
                    @if($task->contact_email !== "")
                    <div class="col-md-4 text-center-mobile">
                        <p><a href="mailto:{{$task->contact_email}}" target="_blank">{{$task->contact_email}}</a></p>
                    </div>
                    @endif
                    @if($task->contact_phone !== "")
                    <div class="col-md-4 text-right-mobile">
                        <p><a href="tel:{{substr(preg_replace('/[^0-9]/', '', $task->contact_phone), -10)}}">{{$task->contact_phone}}</a></p>
                    </div>
                    @endif
                </div>
                @endif
                @if($task->dev_url !== "" || $task->live_url !== "")
                <div class="row">
                    @if($task->dev_url !== "")
                    <div class="col-md-6">
                        <h4>Dev URL</h4>
                        <p><a href="{{$task->dev_url}}" target="_blank">{{$task->dev_url}}</a></p>
                    </div>
                    @endif
                    @if($task->live_url !== "")
                    <div class="col-md-6">
                        <h4>Live URL</h4>
                        <p><a href="{{$task->live_url}}" target="_blank">{{$task->live_url}}</a></p>
                    </div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>