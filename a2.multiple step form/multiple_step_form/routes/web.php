<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StepFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('application',[StepFormController::class, 'application'])->name('application');
Route::post('/app_store',[StepFormController::class, 'app_post'])->name('app_post');
Route::get('/userlist',[StepFormController::class, 'userlist'])->name('userlist');

Route::get('user/edit/{user_id}',[StepFormController::class, 'user_edit']);
Route::get('user/delete/{user_id}',[StepFormController::class, 'userdelete']);

Route::post('draft',[StepFormController::class, 'draft'])->name('draft');

