<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;

// Define your resource routes
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/about', [AboutController::class, 'index'])->name('aboutme');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Registration routes
Route::get('/registration', [FormController::class, 'showRegistrationForm']);
Route::post('/registration/post', [FormController::class, 'handleRegistration'])->name('registration.post');

//buttons in hoemepage
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/start-project', [HomeController::class, 'startProject'])->name('start.project');