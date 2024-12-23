<?php

use App\Http\Controllers\links;
use App\Models\contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('test', function () {
    mail::to('info@damsonspecial.com')->send(
        new \App\Mail\contactus()
    );
    return 'done';
});

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('about', function () {
//     return view('about');
// }) ->name('about');

Route:: get('/about', [links::class, 'about'])->name('about');

Route:: get('/portfolio', [links::class, 'portfolio'])->name('portfolio');

Route:: get('/resume', [links::class, 'resume'])->name('resume');
Route:: get('/contact', [links::class, 'contact'])->name('contact');
Route:: post('/contactus', [contactus::class])->name('contactus');
Route:: post('/contactus', function () {
        // return view('about');


 }) ;
