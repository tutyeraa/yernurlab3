<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
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
Route::get('/profile', function(){
  return view('profile');
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

//Sending mail
Route::post('/mail', [MailController::class, 'send'])->name('send');

//Upload func
Route::get('/upload', [UploadController::class, 'index']);
Route::post('/upload', [UploadController::class, 'upload'])->name('upload');

//localization with switches
Route::get('lang/{lang}', function($locale){
   session()->put('locale', $locale);
   return Redirect()->back();
});