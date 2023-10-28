<?php

use Illuminate\Support\Facades\Route;

//1.Главная страница
Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    // Список маршрутов, защищенных авторизацией
    /**
     * Страница с личным кабинетом авторизованного пользователя
     */
    Route::get('/lk', function () {
        return view('lk');// Вывод персональных данных пользователя
    })->name('lk.show');

    Route::post(
        '/tasks/{task}/comment',
        [\App\Http\Controllers\CommentController::class, 'store']
    )->name('tasks.comment');

    /**
     * Обработчик смены статуса задачи
     */
    Route::patch('/tasks/{task}/status', function ($task) {
        // Обработчик смены статуса задачи $task
    });

    /**
     * Обработчик назначения пользователей к задаче
     */
    Route::put('/tasks/{task}/users', function ($task) {
        // Обработчик данных назначения пользователей на задачу $task
    });

    /**
     * Здесь сосредоточены 7 CRUD-маршрутов по задачам
     * Список сгенерированных маршрутов этой строкой можно посмотреть командой
     * php artisan route:list
     *
     */
    Route::resource('tasks', \App\Http\Controllers\TaskController::class);
    Route::post('/tasks/list', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
});


Auth::routes();

























/*
Route::get('/test', function(){
   return '<a href="/test/1">Test</a>';
});


Route::get('/test/{id}', function($number){
    return "Вы попали на страницу № $number";
})->whereAlphaNumeric('number');

Route::post('/test', function(){
   //Обработчик формы
    //1. Считывание данных с формы
    //2. сохранение данных в базе
    //3. вывод вьюшки\редирект на другую страницу
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
