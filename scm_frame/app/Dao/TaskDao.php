<?php

namespace App\Dao;

use App\Models\Task;
use App\Contracts\Dao\TaskDaoInterface;
use Illuminate\Http\Request;


class TaskDao implements TaskDaoInterface
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
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
