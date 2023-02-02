<?php

use App\Models\formModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddUserController;

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
    return view('Home');
});

Route::post('/admin/form', [AddUserController::class, 'addData'])->name('add.attribute');
Route::get('/user-list', [AddUserController::class, 'readUser'])->name('readUser');
Route::get('/edit-user/{user_id}', [AddUserController::class, 'editUser'])->name('editUser');
Route::post('/update-user/{id}', [AddUserController::class, 'updateUser'])->name('updateUser');
Route::get('/delete-user/{id}', [AddUserController::class, 'deleteUser'])->name('deleteUser');
