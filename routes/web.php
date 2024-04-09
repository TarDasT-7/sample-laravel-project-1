<?php

use App\Http\Controllers\auth\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.page');
})->name("home");
Route::get('/categories', function () {
    return view('web.categories.page');
})->name('categories');

Route::get('/search', function () {
    return view('web.search.page');
})->name('search');

Route::get('categories/{slug}', function () {
    return view('web.categories.slug.page');
})->name("categories.slug");

Route::get('offers/{slug}', function () {
    return view('web.offers.page');
})->name("offers.slug");

Route::get('/books/{slug}', function () {
    return view('web.books.slug.page');
})->name('books.slug');


// authentication

Route::post("/register", [AuthenticationController::class, "register"])->name("register");
Route::post("/login", [AuthenticationController::class, "login"])->name("login");
Route::post("/logout", [AuthenticationController::class, "logout"])->name("logout");
