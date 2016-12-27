<div id="subtask-edit-modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit Subtask</h5>
            </div>

            <div class="modal-body">
                <form action="/subtasks" method="POST" id="edit-subtask">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="task_id" value="{{$task->id}}">
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <h5>Name</h5>
                            <input name="subtask_name" type="text" class="form-control m-b-3">
                        </div>
                        <div class="col-xs-12">
                            <h5>Description</h5>
                            <textarea name="subtask_description" class="form-control m-b-3" rows="4"></textarea>
                        </div>
                        <div class="col-md-10">
                            <h5>Assigned To</h5>
                            <select name="subtask_user_id" class="form-control m-b-3">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <h5>Estimated Hours</h5>
                            <input name="subtask_hours_estimate" type="number" class="form-control m-b-3 text-right" placeholder="0" step="0.25" min="0" max="8">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-xs btn-info" form="edit-subtask">submit</button>
                <button type="button" class="btn btn-xs" data-dismiss="modal">close</button>
            </div>

        </div>
    </div>
</div>

