<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\LoginContronller;
use App\Http\Controllers\admin\mainContronller;
use App\Http\Controllers\Admin\SlidesController;
use App\Http\Controllers\Admin\CatesController;
use App\Http\Controllers\Admin\postsController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\videosController;
use App\Http\Controllers\Admin\feedbacksController;
use App\Http\Controllers\Admin\commentsController;
use App\Http\Controllers\Admin\locationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;

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
Route::get('/login',[LoginContronller::class,'index'])->name('login');
Route::post('admin/users/login/logout',[LoginContronller::class,'logout'])->name('logout');
Route::post('admin/users/login/store', [LoginContronller::class,'store']);
// Xác thực quyền đăng nhập, Muốn vào TRANG QUẢN TRỊ phải qua bước đăng nhập
Route::middleware(['auth'])->group(function() {
    Route::get('/admin',[mainContronller::class,'index'])->name('admin');
    Route::prefix('admin')->group(function () {
        Route::resource('slides', SlidesController::class);
        Route::resource('cates', CatesController::class);
        Route::resource('posts', postsController::class);
        Route::resource('locations', locationsController::class);
        Route::resource('banners', BannersController::class);
        Route::resource('videos', videosController::class);
        Route::resource('feedbacks', feedbacksController::class);
        Route::resource('comments', commentsController::class);
    });
});
Route::get('/',[HomeController::class,'home'])->name('home');
Route::post('sendFeedBack',[FeedbackController::class,'store'])->name('sendFeedBack');
Route::post('sendComment',[CommentController::class,'store'])->name('sendComment');
Route::get('/post/{alias}/{id}.html',[PostController::class,'details'])->name('postDetails');
