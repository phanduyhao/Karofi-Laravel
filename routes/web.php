<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\mainContronller;
use App\Http\Controllers\Admin\SlidesController;
use App\Http\Controllers\Admin\CatesController;
use App\Http\Controllers\HomeController;

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
Route::get('/admin',[mainContronller::class,'index'])->name('admin');
Route::prefix('admin')->group(function(){
    Route::resource('slides', SlidesController::class);
    Route::resource('cates', CatesController::class);

});
Route::get('/',[HomeController::class,'home'])->name('home');
