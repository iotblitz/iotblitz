<?php

use App\Http\Controllers\admin\AuthClass;
use App\Http\Controllers\admin\Dashboard;
use App\Http\Controllers\admin\IotBlitz;
use App\Http\Controllers\public\Home;
use Illuminate\Support\Facades\Route;

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

/* ====================================================================================
                        Public Routes
 ====================================================================================*/

Route::get('/', [Home::class, 'home']);

Route::get('/home', [Home::class, 'home'])->name('home');
Route::get('/blogs', [Home::class, 'blogs'])->name('blogs');
Route::get('/blogs/{blogs_id}', [Home::class, 'single_blogs'])->name('single_blogs');
Route::post('/blogs/comments/{blog_id}', [Home::class, 'public_comments'])->name('public_comments');


Route::get('robots.txt',[Home::class,'robots']);
Route::get('sitemap.xml',[Home::class,'sitemap']);




/* ====================================================================================
   ==================================================================================
                        Administration Routes
   ==================================================================================
 ====================================================================================*/
Route::prefix('/admin')->group(function () {
    Route::match(['get', 'post'], '/login', [AuthClass::class, 'login'])->name('admin.login');
    Route::match(['get', 'post'], '/register', [AuthClass::class, 'register'])->name('admin.register');
    Route::get('/logout', [AuthClass::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::middleware(['user-access:SA'])->group(function () {
            Route::prefix('/super')->group(function () {
                Route::get('/dashboard', [Dashboard::class, 'super_admin_dashboard'])->name('super_admin.dashboard');
                Route::prefix('/page')->group(function () {
                    Route::prefix('/blog')->group(function () {
                        Route::match(['get'],'/list',[IotBlitz::class,'blog'])->name('super_admin.page.blog');
                        Route::match(['get','post'],'/add',[IotBlitz::class,'blog_add'])->name('super_admin.page.blog_add');
                        Route::match(['get','post'],'/list/{blog_id}',[IotBlitz::class,'blog_edit'])->name('super_admin.page.blog_edit');
                    });

                    Route::prefix('/case_study')->group(function () {
                        Route::match(['get'],'/list',[IotBlitz::class,'case_study'])->name('super_admin.page.case_study');
                        Route::match(['get','post'],'/add',[IotBlitz::class,'case_study_add'])->name('super_admin.page.case_study_add');
                        Route::match(['get','post'],'/list/{case_study_id}',[IotBlitz::class,'case_study_edit'])->name('super_admin.page.case_study_edit');
                    });
                });
            });
        });
    });
});
