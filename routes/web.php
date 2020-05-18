<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});




//made new views using new controller
Route::get('/home','frontEndCtrlr@IndexHome');
Route::get('/about','frontEndCtrlr@IndexAboutUs');


Route::get('/task',function(){
    $data = App\TaskModel::all();
    return view('task')->with('tasks',$data);
});

Route::post('/saveTask','frontEndCtrlr@Indexdata');



Route::get('/markAsCompleted/{id}','frontEndCtrlr@UpdateAsCompleted');
Route::get('/markAsNotCompleted/{id}','frontEndCtrlr@UpdateAsNotCompleted');
Route::get('/deleteTask/{id}','frontEndCtrlr@IndexDelete');
Route::get('/updateTask/{id}','frontEndCtrlr@IndexUpdateView');

Route::post('/updateTasks','frontEndCtrlr@UpdateTask');




