<?php
use App\Http\Controllers\workersController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [workersController::class, 'welcome'])->name('welcome');
Route::get('/', [workersController::class, 'index'])->name('index');
Route::get('all', [workersController::class, 'getAll'])->name('all');
Route::get('add', [workersController::class, 'add'])->name('add');
Route::get('add0', [workersController::class, 'add0'])->name('add0');
Route::get('/detail/{id}', [workersController::class, 'detail'])->name('detail');
Route::post('/sendadd', [workersController::class, 'sendadd'])->name('sendadd');
Route::get('/editpersonal/{id}', [workersController::class, 'editpersonal'])->name('editpersonal');
Route::get('/editcontact/{id}', [workersController::class, 'editcontact'])->name('editcontact');
Route::post('/sendeditpersonal', [workersController::class, 'sendeditpersonal'])->name('sendeditpersonal');
Route::post('/sendeditcontact', [workersController::class, 'sendeditcontact'])->name('sendeditcontact');
Route::get('/editjob/{id}', [workersController::class, 'editjob'])->name('editjob');
Route::post('/sendeditjob', [workersController::class, 'sendeditjob'])->name('sendeditjob');
Route::get('/edithealth/{id}', [workersController::class, 'edithealth'])->name('edithealth');
Route::post('/sendedithealth', [workersController::class, 'sendedithealth'])->name('sendedithealth');
Route::delete('/delete/{id}', [WorkersController::class, 'delete'])->name('delete');
