<?php

use App\Http\Controllers\general\HomeController;
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

/*
 * GENERAL ROUTES
 */
Route::get('/', [HomeController::class,'view'])->name('homePage');
Route::get('/rejestracja-konta',[\App\Http\Controllers\general\RegisterPageController::class,'view'])->name('rejestracja');
Route::post('/rejestracja-konta/wysłanie',[\App\Http\Controllers\general\RegisterPageController::class,'registerUser'])->name('rejestracjaUsera');
Route::get('/logowanie',[\App\Http\Controllers\general\LoginPageController::class, 'view'])->name('login');
Route::post('/logowanie/wysłanie',[\App\Http\Controllers\general\LoginPageController::class, 'login'])->name('login.confirm');
Route::get('/logout',[HomeController::class,'logoutButton'])->name('logout');
Route::get('/registration/confirm/{token}',[\App\Http\Controllers\general\RegisterPageController::class,'verifyAfterRegistration'])->name('verify.email');
Route::get('/blog',[\App\Http\Controllers\general\BlogPageController::class,'view'])->name('blogPage');

/*
 * USER ROUTES
 */

/*
 * ADMIN ROUTES
 */
Route::get('/admin/',[\App\Http\Controllers\admin\AdminController::class,'viewAdminPage'])->name('admin.home');
Route::get('/admin/post',[\App\Http\Controllers\admin\AdminController::class,'viewPostPage'])->name('admin.posts');
Route::get('/admin/post/add',[\App\Http\Controllers\admin\AdminController::class,'viewPostAddPage'])->name('admin.posts.add');
Route::post('/admin/post/add-submit',[\App\Http\Controllers\admin\AdminController::class,'addPost'])->name('admin.post.add');
Route::get('/admin/post/delete/{id}',[\App\Http\Controllers\admin\AdminController::class,'deletePost'])->name('admin.post.delete');
Route::get('/admin/post/edit/{id}',[\App\Http\Controllers\admin\AdminController::class,'editPostView'])->name('admin.posts.edit');
Route::post('/admin/post/edit-submit',[\App\Http\Controllers\admin\AdminController::class,'editPost'])->name('admin.post.edit');
