<?php

namespace App\Services;

use App\Contracts\Dao\TaskDaoInterface;
use App\Contracts\Services\TaskServiceInterface;
use Illuminate\Http\Request;

/**
 * Service class for task.
 */
class TaskService implements TaskServiceInterface
{
  /**
   * task dao
   */
  private $taskDao;
  /**
   * Class Constructor
   * @param PostDaoInterface
   * @return
   */
  public function __construct(TaskDaoInterface $taskDao)
  {
    $this->taskDao = $taskDao;
  }

  /**
   * To save task
   * @param Request $request request with inputs
   * @return Object $task saved task
   */
  public function store(Request $request)
  {
    return $this->taskDao->store($request);
  }


  /**
   * To delete task by id
   * @param string $id task id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function delete($id)
  {
    return $this->taskDao->delete($id);
  }
}
