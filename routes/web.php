<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::prefix('/main')->group(function ()
{
    Route::get('/account',[MainController::class,'account'])->name('account');
    Route::get('/landing',[MainController::class,'landing'])->name('landingpage');
    Route::get('/preview',[MainController::class,'preview'])->name('preview');
    Route::get('/mainpage',[MainController::class,'mainpage'])->name('mainpage');
    Route::get('/notifpage',[MainController::class,'notifpage'])->name('notifpage');
});

Route::prefix('/auth')->group(function ()
{
    Route::get('/login',[LoginController::class,'show_login'])->name('login');
    Route::post('/login-proses',[LoginController::class,'login'])->name('login-proses');
    Route::get('/register',[LoginController::class,'register'])->name('register');
    Route::post('/register-proses',[LoginController::class,'register_proses'])->name('proses-register');
    Route::get('/newpassword',[LoginController::class,'newpassword'])->name('newpassword');
    Route::get('/resetpassword',[LoginController::class,'resetpassword'])->name('resetpassword');
    Route::get('/verify',[LoginController::class,'verify'])->name('verify');    
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
});

Route::prefix('profile')->group(function () 
{
    Route::get('/dashboard_user',[ProfileController::class,'dashboard_user'])->name('dash_user');
    Route::get('/dashboard_user_pengajuan',[ProfileController::class,'dashboard_user_pengajuan'])->name('dash_user_ajuan');
    Route::get('/dashboard_user_kelola',[ProfileController::class,'dashboard_user_kelola'])->name('dash_user_kelola');
    Route::get('/dashboard_user_saya',[ProfileController::class,'dashboard_user_saya'])->name('dash_user_saya');
});

Route::prefix('admin')->group(function ()
{
    Route::get('/dashboard_admin',[AdminController::class,'dashboard_admin'])->name('dash_admin');
    Route::get('/dashboard_admin_pengajuan',[AdminController::class,'dashboard_admin_pengajuan'])->name('dash_admin_ajuan');
    Route::get('/dashboard_admin_kelola_akun',[AdminController::class,'dashboard_admin_kelola_akun'])->name('dash_admin_kelola_akun');
    Route::get('/dashboard_admin_kelola_survei',[AdminController::class,'dashboard_admin_kelola_survei'])->name('dash_admin_kelola_survei');
});

