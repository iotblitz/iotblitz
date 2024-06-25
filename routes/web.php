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

Route::get('/', [Home::class, 'home'])->name('home');
Route::get('/faqs', [Home::class, 'faqs'])->name('faqs');

Route::get('/contact-us', [Home::class, 'public_contact'])->name('contact');
Route::post('/contact_public', [Home::class, 'public_contact_public'])->name('contact_public');
Route::get('/about-us', [Home::class, 'public_about'])->name('about');


Route::get('/case_study', [Home::class, 'case_study'])->name('case_study');
Route::get('/case_study/{case_study_id}', [Home::class, 'single_case_study'])->name('single_case_study');


Route::get('/services', [Home::class, 'solutions'])->name('solutions');
Route::get('/services/{solutions_id}', [Home::class, 'single_solution'])->name('single_solutions');


Route::get('/products', [Home::class, 'product'])->name('product');
Route::get('/products/{product_id}', [Home::class, 'single_product'])->name('single_product');

Route::get('/blogs', [Home::class, 'blogs'])->name('blogs');
Route::get('/blogs/{blogs_id}', [Home::class, 'single_blogs'])->name('single_blogs');
Route::get('/author/{author}', [Home::class, 'public_blog_author'])->name('public_blog_author');
Route::get('/tags/{tags}', [Home::class, 'public_blog_tags'])->name('public_blog_tags');
Route::post('/blogs/comments/{blog_id}', [Home::class, 'public_comments'])->name('public_comments');


Route::get('/careers', [Home::class, 'careers'])->name('careers');
Route::get('/careers/{carcers_id}', [Home::class, 'single_career'])->name('single_careers');
Route::get('/apply-job/{carcers_id}', [Home::class, 'apply_jobs'])->name('apply_jobs');
Route::post('/apply-job-submit/{carcers_id}', [Home::class, 'apply_jobs_save'])->name('apply_jobs_save');


Route::get('/terms-and-conditions', [Home::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::get('/cookies-policy', [Home::class, 'cookies_policy'])->name('cookies_policy');
Route::get('/privacy-policy', [Home::class, 'privacy_policy'])->name('privacy_policy');
Route::get('robots.txt', [Home::class, 'robots']);
Route::get('sitemap.xml', [Home::class, 'sitemap']);







/* ====================================================================================
   ==================================================================================
                        Administration Routes
   ==================================================================================
 ====================================================================================*/
Route::prefix('/admin')->group(function () {
    Route::match(['get', 'post'], '/login', [AuthClass::class, 'login'])->name('admin.login');
    // Route::match(['get', 'post'], '/register', [AuthClass::class, 'register'])->name('admin.register');
    Route::get('/logout', [AuthClass::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::middleware(['user-access:SA'])->group(function () {
            Route::prefix('/super')->group(function () {
                Route::get('/dashboard', [Dashboard::class, 'super_admin_dashboard'])->name('super_admin.dashboard');
                Route::prefix('/page')->group(function () {
                    Route::prefix('/blog')->group(function () {
                        Route::match(['get'], '/list', [IotBlitz::class, 'blog'])->name('super_admin.page.blog');
                        Route::match(['get', 'post'], '/add', [IotBlitz::class, 'blog_add'])->name('super_admin.page.blog_add');
                        Route::match(['get', 'post'], '/list/{blog_id}', [IotBlitz::class, 'blog_edit'])->name('super_admin.page.blog_edit');
                    });

                    Route::prefix('/case_study')->group(function () {
                        Route::match(['get'], '/list', [IotBlitz::class, 'case_study'])->name('super_admin.page.case_study');
                        Route::match(['get', 'post'], '/add', [IotBlitz::class, 'case_study_add'])->name('super_admin.page.case_study_add');
                        Route::match(['get', 'post'], '/list/{case_study_id}', [IotBlitz::class, 'case_study_edit'])->name('super_admin.page.case_study_edit');
                    });

                    Route::prefix('/products')->group(function () {
                        Route::match(['get'], '/list', [IotBlitz::class, 'product'])->name('super_admin.page.products');
                        Route::match(['get', 'post'], '/add', [IotBlitz::class, 'product_add'])->name('super_admin.page.product_add');
                        Route::match(['get', 'post'], '/edit/{product_id}', [IotBlitz::class, 'product_edit'])->name('super_admin.page.products_edit');
                    });

                    Route::prefix('/solution')->group(function () {
                        Route::match(['get'], '/list', [IotBlitz::class, 'solution'])->name('super_admin.page.solutions');
                        Route::match(['get', 'post'], '/add', [IotBlitz::class, 'solution_add'])->name('super_admin.page.solution_add');
                        Route::match(['get', 'post'], '/edit/{solution_id}', [IotBlitz::class, 'solution_edit'])->name('super_admin.page.solutions_edit');
                    });


                    Route::prefix('/careers')->group(function () {
                        Route::match(['get'], '/list', [IotBlitz::class, 'careers'])->name('super_admin.page.careerss');
                        Route::match(['get', 'post'], '/add', [IotBlitz::class, 'careers_add'])->name('super_admin.page.careers_add');
                        Route::match(['get', 'post'], '/edit/{careers_id}', [IotBlitz::class, 'careers_edit'])->name('super_admin.page.careerss_edit');

                        Route::match(['get', 'post'], '/{careers_id}', [IotBlitz::class, 'careers_edit'])->name('super_admin.page.careerss_edit');
                        Route::get('/applycation-list/{careers_id}', [IotBlitz::class, 'applycation_list'])->name('super_admin.page.applycation_list');
                    });


                    Route::prefix('/contact')->group(function () {
                        Route::match(['get'], '/list', [IotBlitz::class, 'contact'])->name('super_admin.page.contact');
                    });
                });

                Route::prefix('/employee')->group(function () {
                    Route::match(['get', 'post'], '/register', [AuthClass::class, 'register'])->name('employee.register');
                });
            });
        });
    });
});
