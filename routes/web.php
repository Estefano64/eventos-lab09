<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\EventController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::post('/contact', [SiteController::class, 'handleContact'])->name('contact.submit');
Auth::routes();




Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');