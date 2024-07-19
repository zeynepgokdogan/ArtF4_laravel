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

//use db library for database operations
Route:: get('/form-add', [FormController::class, 'add']);
Route:: get('/form-delete', [FormController::class, 'delete']);
Route:: get('/form-update', [FormController::class, 'update']);
Route:: get('/form-listOfPeople', [FormController::class, 'ListOfDatabase']);

//use model for database operations
Route:: get('/form-addModel', [FormController::class, 'add_useModel']);
Route:: get('/form-deleteModel', [FormController::class, 'delete_useModel']);
Route:: get('/form-updateModel', [FormController::class, 'update_useModel']);
Route:: get('/form-find', [FormController::class, 'find_useModel']);

