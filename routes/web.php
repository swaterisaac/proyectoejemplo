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
    return view('welcome');
});

Route::get('/courses', 'CourseController@index');
Route::get('/courses/{id}','CourseController@show');
Route::post('/courses/create','CourseController@store');
Route::put('/courses/update/{id}','CourseController@update');
Route::delete('/courses/delete/{id}','CourseController@destroy');

Route::get('/enrollments', 'EnrollmentController@index');
Route::get('/enrollment/{id}','EnrollmentController@show');
Route::post('/enrollment/create','EnrollmentController@store');
Route::put('/enrollment/update/{id}','EnrollmentController@update');
Route::delete('/enrollment/delete/{id}','EnrollmentController@destroy');

Route::get('/groups', 'GroupController@index');
Route::get('/group/{id}','GroupController@show');
Route::post('/group/create','GroupController@store');
Route::put('/group/update/{id}','GroupController@update');
Route::delete('/group/delete/{id}','GroupController@destroy');

Route::get('/groupStudents', 'GroupStudentController@index');
Route::get('/groupStudent/{id}','GroupStudentController@show');
Route::post('/groupStudent/create','GroupStudentController@store');
Route::put('/groupStudent/update/{id}','GroupStudentController@update');
Route::delete('/groupStudent/delete/{id}','GroupStudentController@destroy');

Route::get('/students', 'StudentController@index');
Route::get('/student/{id}','StudentController@show');
Route::post('/student/create','StudentController@store');
Route::put('/student/update/{id}','StudentController@update');
Route::delete('/student/delete/{id}','StudentController@destroy');

Route::get('/subjects', 'SubjectController@index');
Route::get('/subject/{id}','SubjectController@show');
Route::post('/subject/create','SubjectController@store');
Route::put('/subject/update/{id}','SubjectController@update');
Route::delete('/subject/delete/{id}','SubjectController@destroy');