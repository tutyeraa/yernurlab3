<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/create', function(){
   DB::table('post')->insert([
     'tittle'=>'My lab4',
     'body'=>'IT IS MY LAB4 FROM LARAVEL, I USE TO MIGRATION AND MODEL'
   ]);
});
Route::get('post', [PostController::class, 'index']);
Route::get('post2/create', function(){
   return view('blog.create');
});
Route::post('blog/create', [PostController::class, 'store'])->name('add-post');

Route::get('post/{id}', [PostController::class, 'get_id']);
