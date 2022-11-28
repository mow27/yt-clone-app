<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\Controller;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search', [App\Http\Controllers\Controller::class, 'search']);
Route::get('/video-thumb', [App\Http\Controllers\ThumbnailTest::class, 'testThumbnail']);
Route::post('/video_likes/update/{id}/{like}', [App\Http\Controllers\Controller::class, 'like_details']);
Route::get('/channel_details/{id}', [App\Http\Controllers\Controller::class, 'channel_details']);
Route::get('/video_details/{id}', [App\Http\Controllers\Controller::class, 'video_details']);
Route::get('/channel', [App\Http\Controllers\Controller::class, 'channel']);

Route::get('posts', [App\Http\Controllers\Controller::class, 'posts']);
Route::get('detail/{id}', [App\Http\Controllers\Controller::class, 'detail']);

Route::get('/test', function() {
    return view('livewire.channel.test');
});

Route::middleware('auth')->group(function() {
    Route::get('/channel/{channel}/edit', [ChannelController::class, 'edit'])->name('channel.edit');
    Route::post('upload', [ChannelController::class, 'upload_file'])->name('upload.post');
    Route::post('/generate-thumbnail', [ChannelController::class, 'generate_thumbnail'])->name('generate_thumbnail.post');
    Route::get('/thumbnail', function () { return view('channel.generate-thumbnail'); })->name('thumbnail');
    Route::get('/upload-video', function () { return view('channel.upload-video'); })->name('upload-video');
   // Route::get('/channel', [Controller::class, 'channel'])->name('channel');
});




