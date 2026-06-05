<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $title = 'Welcome to My Website';
//     $name = 'Lyhong Taing';
//     $major = 'CS';
//     $uni = 'Life University';
//     return view('welcome', compact('title', 'name', 'major', 'uni'));
// });


// Route::get('/about', function () {
//     $aboutTitle = 'About Us';
//     return view('about', compact('aboutTitle'));
// });

// Route::get('/contact', function () {
//     $contact = 'My Contact';
//     return view('contact', compact('contact'));
// });

// Route::get('/services', function () {
//     $serv = 'Our Services';
//     $info = 'Contact us with lyhong@lifeun.edu.kh';
//     return view('services', compact('serv', 'info'));
// });


Route::get('/', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);

Route::get('/services', [PageController::class, 'services']);
Route::get('/products', [PageController::class, 'products']);

Route::get('/profile', [ProfileController::class, 'profile']);

// user
Route::get('/user', [UserController::class, 'index']);

// form
Route::get('/form', [FormController::class, 'create']);
Route::post('/form/store', [FormController::class, 'store']);

// Contact
Route::get('/contact-table', [ContactController::class, 'index']);
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);

// Update & Delete
Route::get('/contact-edit/{id}/edit', [ContactController::class, 'edit']);
Route::put('/contact/{id}/', [ContactController::class, 'update']);
Route::delete('/contact/{id}', [ContactController::class, 'destroy']);

// students
Route::resource('students', StudentController::class);