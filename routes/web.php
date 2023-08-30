<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//frontend
Route::get('/', [UserController::class, 'index']);
Route::get('about', [UserController::class, 'about']);

//backend
Route::middleware(['login:admin'])->group(function () {

    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('simpan', [AdminController::class, 'simpan_data'])->name('simpan_data');
    Route::get('admin/data', [AdminController::class, 'data'])->name('admin.data');
    Route::get('admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');

    Route::get('admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');

    Route::put('admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
});


Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register_action', [LoginController::class, 'register_action'])->name('register.action');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login_action', [LoginController::class, 'login_action'])->name('login_action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

