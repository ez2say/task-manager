<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    public function show(User $user, Task $task)
    {
        // вернет true/false, привязан ли $user к $task
        // $user->tasks - все задачи, привязанные к $user
        // $task->users - всех пользователей, привязанных к задаче

        // Алгоритм 1
        /*
        $tasksUser = $user->tasks;
        // 1. Для всех задач авторизованного пользователя
        foreach ($tasksUser as $taskUser) {
            // 1.1. Если id задачи $task = текущей задаче пользователя, которую мы проверяем
            if ($task->id === $taskUser->id) {
                // вернуть true
                return true;
            }
        }
        // 2. Вернуть false
        return false;
        */

        return $user->tasks()->find($task->id) !== null;
    }
}
