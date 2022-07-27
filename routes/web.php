<?php

use App\Http\Livewire\About;
use App\Http\Livewire\Activities;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Home;
use App\Http\Livewire\NewDetails;
use App\Http\Livewire\News;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/activities', Activities::class)->name('activities');
Route::get('/news', News::class)->name('news');
Route::get('/new_detail/{id}', array('as' => 'new_detail', 'uses' => NewDetails::class));