<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('courses.list_course');
});

Auth::routes();

Route::resource('users', 'UserController');

Route::resource('courses', 'CourseController');

Route::resource('lessons', 'LessonController');
