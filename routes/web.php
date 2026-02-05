<?php


use App\Http\Controllers\AboutController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\PostController;
//use App\Http\Middleware\AdminPanelMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts/', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');


Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete'])->name('post.delete');
Route::get('/posts/first_or_create', [PostController::class, 'firstorcreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateorcreate']);




//
//
//Route::get('/', function () {
//  return 'Admin Mainpage';
//});



//Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
//    Route::group(['namespace' => 'Post'], function (){
//        Route::get('/post', IndexAdController::class])->name('admin.post.index');
//        Route::get('/posts/{id}', function ($id){
//            return "Admin post {$id}";
//        });
//
//    });
//});



//Route::prefix('admin')->group(function (){
//    Route::get('/', function () {
//        // ...
//    })->middleware(AdminPanelMiddleware::class);


    //        Route::get('/', function (){
//       return 'Admin Mainpage';
//   });
//   Route::get('/posts', IndexAdController::class)->middleware(AdminPanelMiddleware::class)->name('admin.post.index');
//   Route::get('/posts/{id}', function ($id){
//       return "Admin post {$id}";
//   })->middleware(AdminPanelMiddleware::class);
//});

//Route::get('/posts', PostController::class)->name('post.index');
//Route::get('/posts/create', PostController::class)->name('post.create');
//
//Route::post('/posts', PostController::class)->name('post.store');
//Route::get('/posts/{post}', PostController::class)->name('post.show');
//Route::get('/posts/{post}/edit', PostController::class)->name('post.edit');
//Route::patch('/posts/{post}', PostController::class)->name('post.update');
//Route::delete('/posts/{post}', PostController::class)->name('post.delete');
//
//
//
//
//Route::get('/posts/update', [PostController::class, 'update']);
//Route::get('/posts/delete', [PostController::class, 'delete']);
//Route::get('/posts/first_or_create', [PostController::class, 'firstOrcreate']);
//Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);
//
//
//Route::get('/main', [MainController::class, 'index'])->name('main.index');
//Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
//Route::get('/about', [AboutController::class, 'index'])->name('about.index');
