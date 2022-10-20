<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Contracts\Services\TaskServiceInterface;
use App\Http\Controllers\Controller;


/**
 * This is Task controller.
 * This handles Task CRUD processing.
 */
class TaskController extends Controller
{
  /**
   * task interface
   */
  private $taskInterface;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(TaskServiceInterface $taskServiceInterface)
  {
    $this->taskInterface = $taskServiceInterface;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    return view('tasks', [
      'tasks' => $tasks
    ]);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $tasks = $this->taskInterface->store($request);
    return $tasks;
  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function delete($id)
  {
    $tasks = $this->taskInterface->delete($id);
    return $tasks;
  }
}
