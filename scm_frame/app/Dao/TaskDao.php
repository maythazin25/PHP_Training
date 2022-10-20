<?php

namespace App\Dao;

use App\Models\Task;
use App\Contracts\Dao\TaskDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskDao implements TaskDaoInterface
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
    //{
    //    $tasks = Task::orderBy('created_at', 'asc')->get();
    //    return view('tasks', [
    //        'tasks' => $tasks
    //    ]);
    //}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //    public function store(request $request)
    //    {
    //        $task = new Task;
    //        $task->name = $request->name;
    //        $task->save();
    //
    //        return redirect('/');
    //    }

    public function store(Request $request)
    {
        // validation for request values
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Task::findOrFail($id)->delete();
        return redirect('/');
    }
}
