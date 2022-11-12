<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agama36Controller;
use App\Http\Controllers\User36Controller;
use App\Http\Controllers\Detail_data36Controller;
use Illuminate\Support\Facades\Auth;

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

    if (Auth::check()) {
        $role = Auth::user()->role;
    } else {
        $role = null;
    }

    return view('dashboard', [
        'role'=>$role
    ]);
})->name('index36')->middleware("auth");

Route::middleware(['auth', 'hakakses:role'])->group(function () {

    // User
    Route::get('/users36', [User36Controller::class, 'users36'])->name('users36');
    Route::get('/profile36', [User36Controller::class, 'profile36'])->name('profile36');
    Route::get('/detailUser36/{id}', [User36Controller::class, 'detailUser36'])->name('detailUser36');
    Route::get('/updatePassword36', [User36Controller::class, 'updatePassword36'])->name('updatePassword36');
    Route::post('/updatePasswordProses36/{id}', [User36Controller::class, 'updatePasswordProses36'])->name('updatePasswordProses36');
    Route::get('/logout36', [User36Controller::class, 'logout36'])->name('logout36');

    // Detail data
    Route::get('/createData36', [Detail_data36Controller::class, 'createData36'])->name('createData36');
    Route::post('/createDataProses36', [Detail_data36Controller::class, 'createDataProses36'])->name('createDataProses36');
    Route::get('/detailData36', [Detail_data36Controller::class, 'detailData36'])->name('detailData36');

    Route::get('/updateData36', [Detail_data36Controller::class, 'updateData36'])->name('updateData36');
    Route::post('/updateDataProses36', [Detail_data36Controller::class, 'updateDataProses36'])->name('updateDataProses36');
});

Route::middleware(['auth', 'hakadmin:role'])->group(function () {
    // agama
    Route::get('/agama36', [Agama36Controller::class, 'agama36'])->name('agama36');
    Route::get('/createAgama36', [Agama36Controller::class, 'createAgama36'])->name('createAgama36');
    Route::post('/createAgama36Proses', [Agama36Controller::class, 'createAgama36Proses'])->name('createAgama36Proses');
    
    Route::get('/updateAgama36/{id}', [Agama36Controller::class, 'updateAgama36'])->name('updateAgama36');
    Route::post('/updateAgama36Proses/{id}', [Agama36Controller::class, 'updateAgama36Proses'])->name('updateAgama36Proses');
    Route::get('/deleteAgama36Proses/{id}', [Agama36Controller::class, 'deleteAgama36Proses'])->name('deleteAgama36Proses');

    // user
    Route::get('/approveUser36/{id}', [User36Controller::class, 'approveUser36'])->name('approveUser36');
    Route::get('/unapproveUser36/{id}', [User36Controller::class, 'unapproveUser36'])->name('unapproveUser36');
    Route::get('/deleteUser36/{id}', [User36Controller::class, 'deleteUser36'])->name('deleteUser36');

    Route::get('/detailUser36/{id}', [User36Controller::class, 'detailUser36'])->name('detailUser36');

});

Route::get('/login36', [User36Controller::class, 'login36'])->name('login36');
Route::post('/loginProses36', [User36Controller::class, 'loginProses36'])->name('loginProses36');

    Route::get('/register36', [User36Controller::class, 'register36'])->name('register36');
    Route::post('/registerProses36', [User36Controller::class, 'registerProses36'])->name('registerProses36');


