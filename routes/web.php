<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('index');
});

// Route::get('webdevelop', function () {
//     return view('webdevelop-service');
// });

// Route::get('/webdevelop','AdminController@listwebdevelop');

Route::get('/webdevelop', [AdminController::class, 'listwebdevelop']);

Route::post('/addwebdevelop', [AdminController::class, 'webdevelop']);

// Route::post('/addwebdevelop','AdminController@webdevelop');

Route::get('mobappdevelop', function () {
    return view('mobile-app-service');
});

Route::get('/mobdevelop', [AdminController::class, 'listmobdevelop']);

Route::post('/addmobdevelop', [AdminController::class, 'mobdevelop']);


Route::get('iosappdevelop', function () {
    return view('ios-app-service');
});

Route::get('/iosdevelop', [AdminController::class, 'listiosdevelop']);

Route::post('/addiosdevelop', [AdminController::class, 'iosdevelop']);








Route::get('about', function () {
    return view('about');
});


Route::get('windowappdevelop', function () {
    return view('window-app-services');
});
Route::get('/windowdevelop', [AdminController::class, 'listwindowdevelop']);

Route::post('/addwindowdevelop', [AdminController::class, 'windowdevelop']);


Route::get('contact', function () {
    return view('contact_form');
});

Route::get('/contact', 'ContactFormController@createForm')->name('contact.store');
Route::post('/contact', [ContactFormController::class, 'ContactUsForm']);



// Route::get('/test', [ContactFormController::class, 'testing']);
Route::get('/testing', 'ContactFormController@testing');


Route::get('/email', [MailController::class, 'sendmail']);