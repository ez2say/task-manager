<?php

namespace Tests\Feature;

use App\Models\Task;
use App\Models\User;
use Database\Seeders\StatusesSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateTaskTest extends TestCase
{
    use RefreshDatabase;

    protected string $seeder = StatusesSeeder::class;

    // 1. Тест, в котором проверяется, что обычный пользователь
    // видит редактирование своей задачи
    public function test_show_edit_task(): void
    {
        $task = Task::factory()->create();
        $user = User::factory()->create();
        $task->users()->attach($user->id);

        $response = $this->actingAs($user)->get("/tasks/$task->id/edit");

        $response->assertOk();
        $response->assertViewIs('tasks.edit');
        $response->assertViewHas('task');
        $response->assertSeeText('Редактирование задачи');
    }

    // 2. Тест, в котором проверяется, что обычный пользователь
    // не видит редактирование задачи
    public function test_dont_show_edit_task(): void
    {
        $task = Task::factory()->create();
        $user = User::factory()->create();
        // Задача не будет привязана к пользователю
        // $task->users()->attach($user->id);

        $response = $this->actingAs($user)->get("/tasks/$task->id/edit");

        // $response->assertStatus(403); аналогично, что и внизу
        $response->assertForbidden();
        $response->assertDontSeeText('Редактирование задачи');
    }
}
