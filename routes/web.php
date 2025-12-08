<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Post\IndexAdController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminPanelMiddleware;



Route::get('/', [HomeController::class, 'index'])->name('home');
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



Route::prefix('admin')->group(function (){
    Route::get('/', function () {
        // ...
    })->middleware(AdminPanelMiddleware::class);


    //        Route::get('/', function (){
//       return 'Admin Mainpage';
//   });
   Route::get('/posts', IndexAdController::class)->middleware(AdminPanelMiddleware::class)->name('admin.post.index');
   Route::get('/posts/{id}', function ($id){
       return "Admin post {$id}";
   })->middleware(AdminPanelMiddleware::class);
});

Route::get('/posts', IndexController::class)->name('post.index');
Route::get('/posts/create', CreateController::class)->name('post.create');

Route::post('/posts', StoreController::class)->name('post.store');
Route::get('/posts/{post}', ShowController::class)->name('post.show');
Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');




Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrcreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);


Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
