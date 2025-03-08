<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController; 



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
Route::get('/hello world', function () { 
    return 'hello world'; 
});

Route::get('/world', function () { 
    return 'world'; 
});

Route::get('/', function () { 
    return 'selamat datang'; 
});

Route::get('/about', function () { 
    return 'Malik Adzano - 2341760161'; 
});   

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
});

Route::get('/posts/{post}/comments/{comment}', function  ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) { 
    return 'Halaman artikel dengan ID ' . $id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name; 
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});
*/

Route::get('/user/profile', function () { 
    return "user/profile";
   })->name('profile'); 

/*
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [WelcomeController::class,'index']);
Route::get('/about', [WelcomeController::class,'about']);
Route::get('/articles/{id}', [WelcomeController::class,'articles']);

*/

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);


Route::resource('photos', PhotoController::class)->only([  
    'index', 'show' 
]); 
Route::resource('photos', PhotoController::class)->except([  
    'create', 'store', 'update', 'destroy' 
]);

/*
Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Malik Adzano Aryasatya Dharmaputera']); });
*/

Route::get('/greeting', [WelcomeController::class,  'greeting']);
    

Route::get('/', [HomeController::class, 'index'])->name('home');



// soal jobsheet2
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('products.foodBeverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('products.beautyHealth');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('products.homeCare');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('products.babyKid');
});


Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);
Route::get('/sale', [SaleController::class, 'index'])->name('sales.index');