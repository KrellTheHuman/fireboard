<div id="subtask-edit-modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit Subtask</h5>
            </div>

            <div class="modal-body">
                <form action="#">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <input name="subtask-due_date" type="text" class="form-control m-b-3 text-center task-date-picker" title="Subtask Due Date">
                        </div>
                        <div class="col-md-10">
                            <input name="subtask-name" type="text" class="form-control m-b-3" placeholder="subtask heading">
                        </div>
                        <div class="col-xs-12">
                            <textarea name="subtask-description" class="form-control m-b-3" placeholder="description" rows="4"></textarea>
                        </div>
                        <div class="col-md-10">
                            <h5>Assigned To</h5>
                            <select name="subtask-user_id" class="form-control m-b-3">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <h5>Estimated Hours</h5>
                            <input name="subtask-house_estimate" type="number" class="form-control m-b-3 text-right" placeholder="0" step="0.25" min="0" max="8">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-xs" data-dismiss="modal">close</button>
            </div>

        </div>
    </div>
</div>

