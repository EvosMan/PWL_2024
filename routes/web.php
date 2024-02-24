<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*

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

        Route::get('/hello', [WelcomeController::class,'hello'] );
        Route::get('/', [HomeController::class,'index']);
        Route::get('/about', [AboutController::class,'about']);
        Route::get('/articles/{id}', [ArticleController::class,'artikel']);



      //Photo Controller
        Route::resource('photo', PhotoController::class);
        Route::resource('photos', PhotoController::class)->only([
            'index', 'show'
        ]);
        Route::resource('photos', PhotoController::class)->except([
            'create', 'store', 'update', 'destroy'
        ]);
      //Photo Controller
       


        Route::get('/Saya', function () {
            return ('NIM = 2141762053 <br> Nama = M Ariesta Naeva Arya Dhuta ');
        });

        Route::get('/Ashel', function () {
            return ('Adzana Shaliha');
        });

        Route::get('/posts/{post}/comments/{comment}', function ($postid, $commentid){
            return 'Pos ke- '.$postid." Komentar ke- ".$commentid;
        });

        // Route::get('/articles/{id}', function($id){
        //     return 'Halaman artikel dengan ID '.$id;
        // });

        Route::get('/user/profile', function () {
        
        })->name('profile');
        
        Route::get(
        '/user/profile',
        [UserProfileController::class, 'show']
        )->name('profile');

        Route::middleware(['first', 'second'])->group(function () {
    
        Route::get('/user/profile', function () {
       
             });
         });
         
        Route::domain('{account}.example.com')->group(function () {
            Route::get('user/{id}', function ($account, $id) {
        
            });
        });
        Route::middleware('auth')->group(function () {
            Route::get('/user', [UserController::class, 'index']);
            Route::get('/post', [PostController::class, 'index']);
            Route::get('/event', [EventController::class, 'index']);
        });

        Route::prefix('admin')->group(function () {
            Route::get('/user', [UserController::class, 'index']);
            Route::get('/post', [PostController::class, 'index']);
            Route::get('/event', [EventController::class, 'index']);
        });
    

        Route::redirect('/here', '/there');

        Route::view('/welcome', 'welcome');
        Route::view('/welcome', 'welcome', ['name' => 'Taylor']);





