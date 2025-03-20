<?php

use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/news', [\App\Http\Controllers\HomeController::class, 'news']);
Route::get('/gallery', [\App\Http\Controllers\HomeController::class, 'gallery']);
Route::get('/testimonials', [\App\Http\Controllers\HomeController::class, 'testimonials']);
Route::get('/story', [\App\Http\Controllers\HomeController::class, 'story']);
Route::get('/drvinhangsukhadia', [\App\Http\Controllers\HomeController::class, 'drvinhangsukhadia']);
Route::get('/service/{id}', [\App\Http\Controllers\HomeController::class, 'service']);
Route::get('/blogs/{id}', [\App\Http\Controllers\HomeController::class, 'blogsdetail']);
Route::get('/blogs', [\App\Http\Controllers\HomeController::class, 'blogs']);

//APIs
Route::post('/savecomment', [BlogsController::class, 'store'])->name('comments.store');
Route::post('/send-whatsapp-message', function (Request $request) {

    $validatedData = $request->validate([
        'txtName' => 'required|string',
        'txtPhone' => 'required|string',
        'txtDate' => 'required|date',
        'txtMessage' => 'required|string',
    ]);

    $name = $validatedData['txtName'];
    $phone = $validatedData['txtPhone'];
    $date = $validatedData['txtDate'];
    $message = $validatedData['txtMessage'];

    $whatsappUrl = 'https://wa.me/919879139561?text=';
    $whatsappMessage = urlencode("Name: $name, Phone: $phone, Date: $date, Message: $message");

    $finalUrl = $whatsappUrl . $whatsappMessage;

    return redirect($finalUrl);

})->name('send-whatsapp-message');