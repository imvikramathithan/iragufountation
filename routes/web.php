<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



//admin route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/updateStudent', function () {
    return view('updatestudent');
})->middleware(['auth', 'verified'])->name('update.student');

Route::get('/updategallery', function () {
    return view('updategallery');
})->middleware(['auth', 'verified'])->name('update.gallery');

Route::get('/updatemanagement', function () {
    return view('updatemanagement');
})->middleware(['auth', 'verified'])->name('update.management');
Route::get('/updatetestimonials', function () {
    return view('updatetestimonials');
})->middleware(['auth', 'verified'])->name('update.testimonials');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// pageroute
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/sfm',[ServiceController::class,'serviceformanagement'])->name(('services.management'));
Route::get('/sfs',[ServiceController::class,'serviceforstudent'])->name(('services.student'));
Route::get('/sfsh',[ServiceController::class,'handwritingPage'])->name(('services.student.handwriting'));




//mail

Route::post('/send-contact-mail', [MailController::class, 'sendContactMail'])->name('send.contact_mail');
Route::post('/send-management-mail', [MailController::class, 'sendManagementMail'])->name('send.management_mail');
Route::post('/send-donation-mail', [MailController::class, 'sendDonationMail'])->name('send.donation_mail');