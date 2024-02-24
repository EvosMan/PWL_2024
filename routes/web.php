<?php

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

Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\PostProfileController;
use App\Http\Controllers\EventProfileController;
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

Route::get('/ohayou', function () {
    return ('Selamat Datang');
});

Route::get('/Saya', function () {
    return ('NIM = 2141762053 <br> Nama = M Ariesta Naeva Arya Dhuta ');
});

Route::get('/Ashel', function () {
    return ('Adzana Shaliha');
});

Route::get('/posts/{post}/comments/{comment}', function ($postid, $commentid){
    return 'Pos ke- '.$postid." Komentar ke- ".$commentid;
});

Route::get('/articles/{id}', function($id){
    return 'Halaman artikel dengan ID '.$id;
});

Route::get('/user/profile', function () {
    //
   })->name('profile');
   
Route::get(
'/user/profile',
[UserProfileController::class, 'show']
)->name('profile');

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
    // Uses first & second middleware...
    });
   Route::get('/user/profile', function () {
    // Uses first & second middleware...
    });
   });
   Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    //
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