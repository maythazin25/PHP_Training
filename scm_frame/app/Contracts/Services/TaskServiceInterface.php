<?php

namespace App\Contracts\Services;

use Illuminate\Http\Request;

/**
 * Interface for task service
 */
interface TaskServiceInterface
{
  /**
   * To store task
   * @param \Illuminate\Http\Request  $request
   * @return  \Illuminate\Http\Response
   */
  public function store(Request $request);

  /**
   * To delete post by id
   * @param string $id post id
   * @param string $deletedUserId deleted user id
   * @return string $message message success or not
   */
  public function delete($id);
}
