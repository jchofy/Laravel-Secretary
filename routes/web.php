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

Route::get('/','StudentController@index' );

Route::get('students', 'StudentController@index')->name('student.index');

Route::get('student/{student}', 'StudentController@show')->name('student.show');

Route::post('student', 'StudentController@store')->name('student.store');

Route::get('student/{student}/edit', 'StudentController@edit')->name('student.edit');

Route::patch('student/{student}', 'StudentController@update')->name('student.update');

Route::delete('student/{student}', 'StudentController@destroy')->name('student.destroy');

Route::get('student','StudentController@create')->name('student.create');

// Route::post('/borrar', 'StudentController@borrar')->name('borrar');

// Route::get('añadir', 'StudentController@añadir')->name('añadir');

// Route::post('añadirActor', 'StudentController@añadirActor')->name('añadirActor');

// Route::get('ordenarAsc', 'StudentController@ordenarAsc')->name('ordenarAsc');

// Route::get('ordenarDesc', 'StudentController@ordenarDesc')->name('ordenarDesc');

Route::get('subjects', 'SubjectController@index')->name('subject.index');

Route::get('subject/{subject}', 'SubjectController@show')->name('subject.show');

Route::post('subject', 'SubjectController@store')->name('subject.store');

Route::get('subject/{subject}/edit', 'SubjectController@edit')->name('subject.edit');

Route::patch('subject/{subject}', 'SubjectController@update')->name('subject.update');

Route::delete('subject/{subject}', 'SubjectController@destroy')->name('subject.destroy');

Route::get('subject','SubjectController@create')->name('subject.create');

