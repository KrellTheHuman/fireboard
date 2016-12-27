<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Subtask;

class SubtasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Task $task
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subtask = new Subtask;
        $subtask->name = $request->subtask_name;
        $subtask->description = $request->subtask_description;
        $subtask->user_id = $request->subtask_user_id;
        $subtask->hours_estimate = $request->subtask_hours_estimate;
        $subtask->is_complete = false;

        Task::where('id', '=', $request->task_id)->first()->subtasks()->save($subtask);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
