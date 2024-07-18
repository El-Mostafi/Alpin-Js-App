<?php
use App\Livewire\HomePage;
use App\Livewire\UserPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/homme', HomePage::class);
Route::get('/User/{user}', UserPage::class);