<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\DoctorController;
use App\Http\Controllers\User\DepartmentController;
use App\Http\Controllers\User\PricingController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\ContactController;

//admin
use App\Http\Controllers\Admin\HomeAdminController;
/* use App\Http\Controllers\User\AppointmentController; */
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

/* Route::get('/', function () {
    return view('user.home')->name('home');
}); */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::resource('/appointment', 'App\Http\Controllers\User\AppointmentController');

//admin
Route::get('/admin/home', [HomeAdminController::class, 'index']);
Route::resource('/admin/appointment', 'App\Http\Controllers\Admin\AppointmentController');

