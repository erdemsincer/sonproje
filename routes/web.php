<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Note routeleri

Route::get('/notes/createPage',[NoteController::class,'createPage'])->name('notes_createPage');
Route::post('notes/addNote',[NoteController::class,'addNote'])->name('notes_addNote');
Route::get('/notes',[NoteController::class,'index'])->name('notes_index');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/deneme',function (){
        return 5;
    });
});


////TEST ROUTELARI BAŞLANGIÇ
///
///
Route::get('masterTest',function (){
    return view('front.layouts.master');
});
///
///
///
////TEST ROUTLARI BİTİŞ


