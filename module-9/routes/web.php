<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebsiteController::class,'home'])->name('portfolio.home');
Route::get('/about-me',[WebsiteController::class,'aboutMe'])->name('portfolio.about-me');
Route::get('/project',[WebsiteController::class,'project'])->name('portfolio.project');
Route::get('/contact',[WebsiteController::class,'contact'])->name('portfolio.contact');
